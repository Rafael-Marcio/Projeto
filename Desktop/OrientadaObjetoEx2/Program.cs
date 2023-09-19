namespace OrientadaObjetoEx2
{
    internal class Program
    {
        class Calculadora
        {
            //Atributos ou propriedades da Classe

            public int num1;
            public int num2;


            //Funções ou métodos

            public void Somar()
            {
                int soma = num1 + num2;
                Console.WriteLine($"O resultado é {soma}");
            }
            public void Subtrair()
            {
                int subtrair = num1 - num2;
                Console.WriteLine($"O resultado é {subtrair}");

            }
            public void Multiplicar()
            {
                int multiplicar = num1 * num2;
                Console.WriteLine($"O resultado é {multiplicar}");
            }
            public void Dividir()
            {
                int dividir = num1 / num2;
                Console.WriteLine($"O resultado é {dividir}");
            }

        }
        static void Main(string[] args)
        {
            Console.WriteLine(" **************************************************** ");
            Console.WriteLine("CALCULADORA!");
            Console.WriteLine(" **************************************************** ");

            //Instanciando um objeto do tipo Calculadora
            Calculadora calculator = new Calculadora();

            //Pedindo operador 
            Console.Write("Digite o operador que deseja:  [+] [-] [*] [/]: ");
            string operador = Console.ReadLine();
            Console.WriteLine(" **************************************************** ");

            //Pedindo primeiro número
            Console.Write("Digite um número: ");
            calculator.num1 = int.Parse(Console.ReadLine());
            Console.WriteLine(" ******************************************************");

            //Pedindo segundo número
            Console.Write("Digite um número: ");
            calculator.num2 = int.Parse(Console.ReadLine());
            Console.WriteLine(" ******************************************************");

            //Testando qual é o operador
            if (operador == "+")
            {
                calculator.Somar();
            }
            else if (operador == "-")
            {
                calculator.Subtrair();
            }
            else if (operador == "*")
            {
                calculator.Multiplicar();
            }
            else if (operador == "/")
            {
                calculator.Dividir();
            }
            else
            {
                Console.WriteLine("Operador invélido!");
                Console.WriteLine("**********************************************");
                Console.WriteLine("Fim da Aplicação!");
                Console.WriteLine("**********************************************");
            }



        }
    }
}