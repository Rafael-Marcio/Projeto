namespace OrientadaObjetoEx3
{
    internal class Program
    {
        class Animal
        {
            //Atributos da classe
            public string nome;
            public int idade;
            public string especie;
            

        }
        static void Main(string[] args)
        {
            Console.WriteLine("******************************************");
            Console.WriteLine("******Cadastro Animais*****");
            Console.WriteLine("******************************************");
            //Instanciando um objeto Animal
            Animal animais = new Animal();

            //Pegando Atributos
            Console.Write("Qual o nome do animal:  ");
            animais.nome = Console.ReadLine();
            Console.WriteLine("******************************************");

            Console.Write("Qual a idade do animal:  ");
            animais.idade = int.Parse(Console.ReadLine());
            Console.WriteLine("******************************************");

            Console.Write("Qual a espécie do animal:  ");
            animais.especie = Console.ReadLine();
            Console.WriteLine("******************************************");


            if (animais.especie == "cachorro")
            {
                Console.WriteLine("********Resultado********");
                Console.WriteLine("Latir");
                Console.WriteLine("********Fim da Aplicação!********");
            }
            else if (animais.especie == "gato")
            {
                Console.WriteLine("********Resultado********");
                Console.WriteLine("Miar");
                Console.WriteLine("********Fim da Aplicação!********");
            }
            else
            {
                Console.WriteLine("Descrição Inválida!");
                Console.WriteLine("********Fim da Aplicação!********");
            }
        }
    }
}