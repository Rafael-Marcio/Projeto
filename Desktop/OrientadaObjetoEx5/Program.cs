namespace OrientadaObjetoEx5
{
    internal class Program
    {
        class Triangulo
        {
            public double lado1;
            public double lado2;
            public double lado3;
            public double alt;

            //Método

            public void area()
            {
                Console.WriteLine($"A área é: {lado3 * alt / 2}");
            }
        }
        static void Main(string[] args)
        {
            Console.WriteLine("******************************************");
            Console.WriteLine("***************Triângulo******************");
            Console.WriteLine("******************************************");

            Triangulo triangulo = new Triangulo();

            Console.WriteLine("Qual o primeiro lado do seu triângulo:  ");
            triangulo.lado1 = double.Parse(Console.ReadLine());

            Console.WriteLine("Qual o segundo lado do seu triângulo:  ");
            triangulo.lado2 = double.Parse(Console.ReadLine());

            Console.WriteLine("Qual o terceiro lado do seu triângulo ou base:  ");
            triangulo.lado3 = double.Parse(Console.ReadLine());

            triangulo.alt = (triangulo.lado1 + triangulo.lado2 + triangulo.lado3) / 2;
            triangulo.area();



        }
    }
}