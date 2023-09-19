namespace OrientadaObjetoEx4
{
    internal class Program
    {
        class Produto
        {
            //Atributos
            public string nome;
            public double preco;
            public int qntd;
            public string action;

            //Métodos
            public void adicior_Estoque()
            {
                Console.WriteLine("Adicionado ao Estoque!");
            }
            public void remover_Estoque()
            {
                Console.WriteLine("Removido do estoque!");
            }
            public void qntd_Estoque()
            {
                Console.WriteLine("Estoque contado com Sucesso!");
            }
        }
        static void Main(string[] args)
        {
            Produto product = new Produto();

            
                product.nome = Console.ReadLine();
                product.preco = double.Parse(Console.ReadLine());
                product.action = Console.ReadLine();

            if (product.action == "Adicionar" || product.action == "adicionar")
            {
                product.adicior_Estoque();
            }
            else if (product.action == "Remover" || product.action == "remover")
            {
                product.remover_Estoque();
            }
            else if (product.action == "Quantidade" || product.action == "quantidade")
            {
                product.qntd_Estoque();
            }
            else
            {
                Console.WriteLine("Ação Inválida!");
            }
            
            
        }
    }
}