Laravel Restaurant App project

Features :

- Login
- Register
- Show Products Details
- Show Products List
- Show Cart
- Show Orders
- Add Product to Cart and Choose the quantity
- Delete Product from Cart
- Pass an Order

Database configurations :

- Create an sql database with name "ecommerce"
- Create a table with name"users" that contains :
    - user_id : Primary key, auto incremented
    - name
    - email
    - password
    - created_at : type (Date)
    - updated_at : type (Date)
- Create a table with name"products" that contains :
    - product_id : Primary key, auto incremented
    - name
    - price
    - category
    - description
    - gallery
- Create a table with name"cart" that contains :
    - id : Primary key, auto incremented
    - product_id
    - user_id
    - quantity
    - created_at : type (Date)
    - updated_at : type (Date)
- Create a table with name"orders" that contains :
    - id : Primary key, auto incremented
    - product_id
    - user_id
    - quantity
    - status
    - payment_method
    - payment_status
    - fullName
    - num_tel
    - adress

Insert any data for testing.
I dont used Seeder and Migration because i have a problem so follow the "Database configurations" steps.
I used laravel 8 to develop this project with SQL database.
