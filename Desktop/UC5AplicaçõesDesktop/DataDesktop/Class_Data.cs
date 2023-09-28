using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DataDesktop
{
    public class Class_Data
    {
        //Atributos
        public DateTime dataATUAL = DateTime.Now;
        public DateTime data1;
        public DateTime data2;
        public int diasAdicionar;

        //Metodos

        public string AdicionarDias()
        {
            string novaData = dataATUAL.AddDays(diasAdicionar).ToShortDateString();
            return novaData;
        }
        public string CompararData()
        {
            TimeSpan dias = data1.Subtract(data2);
            double diferenca = Math.Round(dias.TotalDays);

            if (diferenca < 0)
            {
                return "Data2 maior que Data1 Erro!";
            }
            else
            {
                return diferenca.ToString() + " dia(s)";
            }
        }
    }
}
