Transforme iss em um marckdown e me envie 



Contexto real

Você precisa implementar a lógica de domínio de um carrinho de compras.

Requisitos

Crie as classes:
Product
CartItem
Cart


Regras de negócio

Product
id
name
price
stock

CartItem
product
quantity
subtotal()

Cart
Deve ter métodos:

addProduct(Product $product, int $qty)
removeProduct(int $productId)
getTotal()
getItems()

Regras importantes
Não pode adicionar produto sem estoque.

Se adicionar o mesmo produto novamente → aumentar quantidade.

Se quantidade chegar a 0 → remover item.

getTotal() deve somar todos subtotais.
```