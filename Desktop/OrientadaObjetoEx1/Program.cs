namespace OrientadaObjetoEx1
{
    internal class Program
    {
        class Aluno
        {

            //Atributos ou propriedades da Classe

            public string nome;
            public string email;
            public string celular;

            //Função de Mostrar na Tela

            public void MostrarAula()
            {
                Console.WriteLine($"\n Olá {nome} \n seu email é {email} \n seu celular é {celular} \n\n\n");
            }
        }
        static void Main(string[] args)
        {

            Console.WriteLine("*************************************************");
            Console.WriteLine("Cadastro Aluno!");
            Console.WriteLine("*************************************************");


            //Instanciando um objeto do tipo Aluno
            Aluno obj = new Aluno();

            //Perguntando o nome
            Console.WriteLine("Digite seu nome: ");
            obj.nome = Console.ReadLine();

            //Pedindo o email
            Console.WriteLine("*************************************************");
            Console.WriteLine("Digite seu email: ");
            obj.email = Console.ReadLine();
            
            //Pedindo o telefone
            Console.WriteLine("*************************************************");
            Console.WriteLine("Digite seu celular: ");
            obj.celular = Console.ReadLine();

            //Mostrando o cadastro na tela
            Console.WriteLine("*************************************************");
            obj.MostrarAula();

            Console.WriteLine("*************************************************");
            Console.WriteLine("Fim da Aplicação!");
            Console.WriteLine("*************************************************");
        }
    }
}