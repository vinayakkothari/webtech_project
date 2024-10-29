import mysql.connector
from datetime import date

# Database connection parameters
db_config = {
    'user': 'roast',
    'password': 'Roast#2024',
    'host': 'localhost',
    'database': 'shopping'
}

try:
    # Connect to MySQL database
    conn = mysql.connector.connect(**db_config)

    # Check if the connection was successful
    if conn.is_connected():
        print("Connected to MySQL database successfully!")

    cursor = conn.cursor()

    # Create the database if it doesn't exist
    cursor.execute("CREATE DATABASE IF NOT EXISTS shopping")
    cursor.execute("USE shopping")

    # Create products table
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

    # Sample product data to insert into the table
    sample_products = [
        ("Mi LED TV 4A PRO", 1289.00, "tv.png", 10),
        ("Bluetooth Headphones", 89.00, "headphones.png", 20),
        ("Gaming Console", 299.00, "console.png", 5),
        ("Leather Bag", 129.00, "bag.png", 15),
        ("Running Shoes", 89.00, "shoes.png", 25)
    ]

    # Insert sample data into products table
    product_insert_query = '''
        INSERT INTO products (name, price, image_filename, quantity_available)
        VALUES (%s, %s, %s, %s)
    '''
    cursor.executemany(product_insert_query, sample_products)

    # Commit changes
    conn.commit()

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

    # Sample order data to insert into the table
    sample_orders = [
        ("John Doe", 1, 2, date(2024, 10, 1)),  # Customer name, 2 units of product_id 1 on October 1, 2024
        ("Jane Smith", 2, 1, date(2024, 10, 2)),  # Customer name, 1 unit of product_id 2 on October 2, 2024
        ("Alice Johnson", 3, 3, date(2024, 10, 3)),  # Customer name, 3 units of product_id 3 on October 3, 2024
        ("Bob Brown", 4, 5, date(2024, 10, 4)),  # Customer name, 5 units of product_id 4 on October 4, 2024
        ("Charlie White", 5, 2, date(2024, 10, 5)),  # Customer name, 2 units of product_id 5 on October 5, 2024
    ]

    # Insert sample data into orders table
    order_insert_query = '''
    INSERT INTO orders (customer_name, product_id, order_quantity, order_date)
    VALUES (%s, %s, %s, %s)
'''
    cursor.executemany(order_insert_query, sample_orders)

    # Commit changes
    conn.commit()


    print("Database and table created successfully with sample data.")

except mysql.connector.Error as err:
    print(f"Error: {err}")



finally:
    # Close the database connection
    if conn.is_connected():
        cursor.close()
        conn.close()
        print("Database connection closed.")

print("check connection")