import mysql.connector
from datetime import date
import hashlib


def hash_password(raw):
    return hashlib.sha256(raw.encode()).hexdigest()


db_config = {
    'user': 'roast',
    'password': 'Roast#2024',
    'host': 'localhost',
}

try:
    conn = mysql.connector.connect(**db_config)

    if conn.is_connected():
        print("Connected to MySQL database successfully!")

    cursor = conn.cursor()

    cursor.execute("CREATE DATABASE IF NOT EXISTS shopping")
    cursor.execute("USE shopping")

    ################

    cursor.execute("DROP TABLE IF EXISTS users")

    cursor.execute('''
       CREATE TABLE IF NOT EXISTS users (
            user_id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(255) NOT NULL,
            password VARCHAR(255) NOT NULL,
            type VARCHAR(255) NOT NULL
        );
    ''')

    sample_users = [
        ("sam", hash_password("sam"), "buyer"),
        ("ron", hash_password("ron"), "seller"),
    ]

    cursor.executemany('''
        INSERT INTO users (username, password, type)
        VALUES (%s, %s, %s)
    ''', sample_users)

    conn.commit()

    ################

    cursor.execute("DROP TABLE IF EXISTS orders")
    cursor.execute("DROP TABLE IF EXISTS products")
    cursor.execute('''
        CREATE TABLE IF NOT EXISTS products (
            product_id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            price DECIMAL(10, 2) NOT NULL,
            image_filename VARCHAR(255),
            quantity_available INT NOT NULL
        )
    ''')

    sample_products = [
        ("Mi LED TV 4A PRO", 1289.00, "tv.png", 10),
        ("Bluetooth Headphones", 89.00, "headphones.png", 20),
        ("Gaming Console", 299.00, "console.png", 5),
        ("Leather Bag", 129.00, "bag.png", 15),
        ("Running Shoes", 89.00, "shoes.png", 25)
    ]

    product_insert_query = '''
        INSERT INTO products (name, price, image_filename, quantity_available)
        VALUES (%s, %s, %s, %s)
    '''
    cursor.executemany(product_insert_query, sample_products)

    conn.commit()

    ################

    cursor.execute('''
    CREATE TABLE IF NOT EXISTS orders (
        order_id INT AUTO_INCREMENT PRIMARY KEY,
        customer_name VARCHAR(255),
        product_id INT,
        order_quantity INT NOT NULL,
        order_date DATE NOT NULL,
        FOREIGN KEY (product_id) REFERENCES products(product_id)
    )
''')

    sample_orders = [
        ("John Doe", 1, 2, date(2024, 10, 1)),
        ("Jane Smith", 2, 1, date(2024, 10, 2)),
        ("Alice Johnson", 3, 3, date(2024, 10, 3)),
        ("Bob Brown", 4, 5, date(2024, 10, 4)),
        ("Charlie White", 5, 2, date(2024, 10, 5)),
    ]

    order_insert_query = '''
    INSERT INTO orders (customer_name, product_id, order_quantity, order_date)
    VALUES (%s, %s, %s, %s)
'''
    cursor.executemany(order_insert_query, sample_orders)

    conn.commit()

    print("Database and table created successfully with sample data.")

except mysql.connector.Error as err:
    print(f"Error: {err}")


finally:
    try:
        if conn.is_connected():
            cursor.close()
            conn.close()
            print("Database connection closed.")
    except NameError:
        pass
