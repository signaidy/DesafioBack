CRUD operations:

crear: POST (http://127.0.0.1:8000/api/products) 
    json:
        {
            name,
            description,
            image,
            brand,
            price,
            price_sale, 
            category,
            stock
        }

Obetener todos los productos: GET (http://127.0.0.1:8000/api/products)

Obetenr todos los productos con search: GET(http://127.0.0.1:8000/api/products?search='search')

Obtener producto por id: GET(http://127.0.0.1:8000/api/products/{id})

Actualizar producto: PUT(http://127.0.0.1:8000/api/products/{id})

Borrar producto: DELETE(http://127.0.0.1:8000/api/products/{id})