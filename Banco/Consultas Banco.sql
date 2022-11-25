select produtos.Nome,alimentos.idAlimentos,alimentos.Medida,alimentos.Recheio,alimentos.Sabor
from alimentos
inner join produtos on produtos.idProdutos = alimentos.Produtos_idProdutos;


select enfeites.idEnfeites,produtos.Nome,enfeites.Cor
from enfeites
inner join produtos on produtos.idProdutos = enfeites.Produtos_idProdutos;


select bebidas.idBebidas,produtos.Nome,bebidas.Litros,bebidas.Marca,bebidas.Sabor
from bebidas
inner join produtos on produtos.idProdutos = bebidas.Produtos_idProdutos;


select cliente.Nome as CNome,aniversariante.Nome,aniversariante.Cores,aniversariante.Data_Festa,aniversariante.Idade,aniversariante.idAniversariante,aniversariante.Tema
from aniversariante
inner join cliente on cliente.idCliente = aniversariante.Cliente_idCliente;


select pedido.Data_Entrega, pedido.Data_Pedido, pedido.End_Do_Cliente_Entrega, pedido.Frete ,pedido.Prozo_de_Entrega, pedido.Tipo_Da_Entrega, pedido.Valor_A_Pagar, pedido.Valor_Pedido, pedido.Valor_Sinal ,pedido.idPedido,aniversariante.Nome
from pedido
inner join aniversariante on aniversariante.idAniversariante = pedido.Aniversariante_idAniversariante;