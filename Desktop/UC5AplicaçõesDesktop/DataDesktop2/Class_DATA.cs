using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DataDesktop2
{
    public class Class_DATA
    {
        //Atributos
        public DateTime dataNascimento;
        public DateTime dataAtual = DateTime.Now;


        //Metodos
        public string DiasVida()
        {
            TimeSpan dias = dataAtual.Subtract(dataNascimento);
            double diferenca = Math.Round(dias.TotalDays);
            if(diferenca < 0)
            {
                return "Data de Nascimento Inválida!";
            }
            else
            {
                return diferenca.ToString() + " dia(s) de Vida!";
            }
        }
    }
}
