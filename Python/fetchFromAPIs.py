import requests
import pandas as pd
import numpy as np
from sqlalchemy import create_engine, text
import time
# from sqlalchemy import text

def fetch_pokemon_data(url): # generic function to fetch data from an API and return a DataFrame
    start = time.time()
    response = requests.get(url)
    if response.status_code == 200:
        data = response.json()
        df = pd.json_normalize(data)
        print(f"Fetched data from {url} in {time.time() - start:.2f} seconds.")
        return df
    return pd.DataFrame()

def get_general_info(url): # tyradex
    df1 = fetch_pokemon_data(url)
    df1 = df1.dropna(subset=["stats.hp", "stats.atk", "stats.def", "stats.spe_atk", "stats.spe_def", "stats.vit"])
    df2 = pd.DataFrame()
    df2["id"] = df1["pokedex_id"].astype(int)
    df2["hp"] = df1["stats.hp"].astype(int)
    df2["atk"] = df1["stats.atk"].astype(int)
    df2["def"] = df1["stats.def"].astype(int)
    df2["sp_atk"] = df1["stats.spe_atk"].astype(int)
    df2["sp_def"] = df1["stats.spe_def"].astype(int)
    df2["spd"] = df1["stats.vit"].astype(int)
    df2["type1"] = df1["types"].apply(lambda x: x[0]["name"])
    df2["type2"] = df1["types"].apply(lambda x: x[1]["name"] if len(x) > 1 else '')
    return df2

def get_sprites(url):  # pokeapi
    max_id = tyradex_df["id"].max()
    df2_list = []

    for pokemon_id in range(1, max_id + 1):
        df1 = fetch_pokemon_data(url + f"/{pokemon_id}")

        sprite_keys = [
        "front_default", "back_default",
        "front_female", "back_female",
        "front_shiny", "back_shiny",
        "front_shiny_female", "back_shiny_female"
        ]

        for _, row in df1.iterrows():
            for key in sprite_keys:
                # PokeAPI renvoie parfois des colonnes comme 'sprites.front_default'
                col_name = f"sprites.{key}"
                if col_name in row:
                    sprite_url = row[col_name] or ""
                    df2_list.append({
                        "pokemon_id": row["id"],
                        "name": key,
                        "url": sprite_url
                    })

    return pd.DataFrame(df2_list)

def get_descriptions(url): # pokeapi (pokemon-species)
    max_id = tyradex_df["id"].max()
    df2_list = []
    df2 = pd.DataFrame()
    df3_list = []
    df3 = pd.DataFrame()
    for i in range(1, max_id + 1):
        df1 = fetch_pokemon_data(url + f"/{i}")
        if df1.empty or df1.isna().all().all() :
            continue
        df2["pokemon_id"] = df1["id"].astype(int)
        df2["lang"] = "fr"
        df2["description"] = df1["flavor_text_entries"].apply(lambda entries: get_desired_desc(entries, "fr"))
        df2_list.extend(df2.to_dict(orient="records"))
        df3["pokemon_id"] = df1["id"].astype(int)
        df3["lang"] = "en"
        df3["description"] = df1["flavor_text_entries"].apply(lambda entries: get_desired_desc(entries, "en"))
        # df3_list.append(df3.copy())
        df3_list.extend(df3.to_dict(orient="records"))
    # df2 = pd.concat(df2_list, ignore_index=True)
    df2 = pd.DataFrame(df2_list)
    # df3 = pd.concat(df3_list, ignore_index=True)
    df3 = pd.DataFrame(df3_list)
    return pd.concat([df2, df3], ignore_index=True)

def get_desired_desc(entries, lang): # helper function for get_descriptions
    for entry in entries:
        if entry["language"]["name"] == lang:
            return entry["flavor_text"].replace("\n", " ").replace("\f", " ")
    return None

def get_names(url): # tyradex
    df1 = fetch_pokemon_data(url)
    df1 = df1.dropna(subset=["stats.hp", "stats.atk", "stats.def", "stats.spe_atk", "stats.spe_def", "stats.vit"])
    df2 = pd.DataFrame()
    df2["pokemon_id"] = df1["pokedex_id"].astype(int)
    df2["lang"] = "fr"
    df2["name"] = df1[f"name.fr"]
    df3 = pd.DataFrame()
    df3["pokemon_id"] = df1["pokedex_id"].astype(int)
    df3["lang"] = "en"
    df3["name"] = df1[f"name.en"]
    return pd.concat([df2, df3], ignore_index=True)

def merge_translations(desc_df, name_df): # final step for translations
    merged_df = pd.merge(desc_df, name_df, on=["pokemon_id", "lang"], how="outer")
    return merged_df

def get_types(url): # pokeapi
    df2_list = []
    df2 = pd.DataFrame()
    for i in range(1, 18 + 1):
        df1 = fetch_pokemon_data(url + f"/{i}")
        #df2["id"] = df1["id"]
        df2["name_fr"] = df1["names"].apply(lambda entries: get_desired_type_name(entries, "fr"))
        df2["name_en"] = df1["names"].apply(lambda entries: get_desired_type_name(entries, "en"))
        df2["sprite"] = "https://raw.githubusercontent.com/Yarkis01/TyraDex/images/types/"+df2['name_fr'].lower()+".png"
        df2_list.extend(df2.to_dict(orient="records"))
    df2 = pd.DataFrame(df2_list)
    return df2

def get_desired_type_name(entries, lang): # helper function for get_types
    for entry in entries:
        if entry["language"]["name"] == lang:
            return entry["name"].replace("é", "e").replace("è", "e")
    return ''

tyradex_df = get_general_info("https://tyradex.vercel.app/api/v1/pokemon")

# MYSQL (connection)

user = "root"
password = ""
host = "localhost"
port = "3306"
database = "locamon"

engine = create_engine(f"mysql+pymysql://{user}:{password}@{host}:{port}/{database}")

# print(get_general_info("https://tyradex.vercel.app/api/v1/pokemon").head())
# print(get_sprites("https://pokeapi.co/api/v2/pokemon").head())
# print(get_descriptions("https://pokeapi.co/api/v2/pokemon-species").head())
# print(get_names("https://tyradex.vercel.app/api/v1/pokemon").head())
# print(merge_translations(get_descriptions("https://pokeapi.co/api/v2/pokemon-species"), get_names("https://tyradex.vercel.app/api/v1/pokemon")).head())
# print(get_types("https://pokeapi.co/api/v2/type"))

with engine.begin() as conn: # Interact with the database
    for _, row in get_general_info("https://tyradex.vercel.app/api/v1/pokemon").iterrows():
        clean_row = {k: "" if pd.isna(v) else v for k, v in row.items()}
        sql = text("""
        INSERT INTO pokemon (id, hp, atk, def, sp_atk, sp_def, spd, type1_id, type2_id)
        VALUES (:id, :hp, :atk, :def, :sp_atk, :sp_def, :spd, (SELECT id from type WHERE name_fr = :type1), (SELECT id from type WHERE name_fr = :type2))
        ON DUPLICATE KEY UPDATE
            hp = VALUES(hp),
            atk = VALUES(atk),
            def = VALUES(def),
            sp_atk = VALUES(sp_atk),
            sp_def = VALUES(sp_def),
            spd = VALUES(spd),
            type1_id = (SELECT id from type WHERE name_fr = :type1),
            type2_id = (SELECT id from type WHERE name_fr = :type2)
        """)
        conn.execute(sql, clean_row)
        
    for _, row in get_sprites("https://pokeapi.co/api/v2/pokemon").iterrows():
        clean_row = {k: "" if pd.isna(v) else v for k, v in row.items()}
        sql = text("""
        INSERT INTO pokemon_sprite (pokemon_id, name, url)
        VALUES (:pokemon_id, :name, :url)
        ON DUPLICATE KEY UPDATE
            name = VALUES(name),
            url = VALUES(url)
        """)
        conn.execute(sql, clean_row)
        
    translations_df = merge_translations(get_descriptions("https://pokeapi.co/api/v2/pokemon-species"), get_names("https://tyradex.vercel.app/api/v1/pokemon"))
    for _, row in translations_df.iterrows():
        clean_row = {k: "" if pd.isna(v) else v for k, v in row.items()}
        #{"pokemon_id": row["pokemon_id"], "lang": row["lang"], "name": row["name"],
        #                    "description": row["description"]}
        sql = text("""
        INSERT INTO pokemon_translation (pokemon_id, lang, name, description)
        VALUES (:pokemon_id, :lang, :name, :description)
        ON DUPLICATE KEY UPDATE
            description = VALUES(description),
            name = VALUES(name)
        """)
        conn.execute(sql, clean_row)
        
    for _, row in get_types("https://pokeapi.co/api/v2/type").iterrows():
        clean_row = {k: "" if pd.isna(v) else v for k, v in row.items()}
        sql = text("""
        INSERT INTO type (name_fr, name_en, sprite)
        VALUES (:name_fr, :name_en, :sprite)
        ON DUPLICATE KEY UPDATE
            name_fr = VALUES(name_fr),
            name_en = VALUES(name_en),
            sprite = VALUES(sprite)
        """)
        conn.execute(sql, clean_row)