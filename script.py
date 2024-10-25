import sqlite3

# Connect to SQLite database (or create it if it doesn't exist)
conn = sqlite3.connect('shopping_site.db')
cursor = conn.cursor()

# Create products table
cursor.execute('''
    CREATE TABLE IF NOT EXISTS products (
        product_id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        price REAL NOT NULL,
        image_filename TEXT,
        quantity_available INTEGER NOT NULL
    )
''')

# Sample product data to insert into the table
sample_products = [
    ("Mi LED TV 4A PRO", 1289.00, "tv.png", 10),
    ("Bluetooth Headphones", 89.00, "headphones.png", 20),
    ("Gaming Console", 299.00, "console.png", 5),
    ("Leather Bag", 129.00, "bag.png", 15),
    ("Running Shoes", 89.00, "shoes.png", 25)
]

# Insert sample data into products table
cursor.executemany('''
    INSERT INTO products (name, price, image_filename, quantity_available)
    VALUES (?, ?, ?, ?)
''', sample_products)

# Commit changes and close the connection
conn.commit()
conn.close()

print("Database and table created successfully with sample data.")
