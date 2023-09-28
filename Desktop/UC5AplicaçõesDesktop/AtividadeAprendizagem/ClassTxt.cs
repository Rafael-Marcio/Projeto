using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace AtividadeAprendizagem
{
    public class ClassTxt
    {
        //Atributos
        public string product;
        public double price;
        public DateTime dataAtual;
        public string way = "C:/Users/968840/Desktop/GItHub_pasta/Projeto/Desktop/UC5AplicaçõesDesktop/AtividadeAprendizagem/banco.txt";

        //Métodos
        public void Save()
        {
            StreamWriter banco;
            banco = File.AppendText(way);
            banco.WriteLine($"{product}: R${price} | {dataAtual}\n");
            banco.Close();
        }
        public String ReadArchive()
        {
            String line;
            StreamReader banco = new StreamReader(way);
            line = banco.ReadLine();
            if (line == null)
            {
                return "Nenhum registro disponível!";
            }
            else
            {
                while (!banco.EndOfStream)
                {
                    line += "\n" + banco.ReadLine();
                }


                return line;
                banco.Close();
            }
        }
    }
    public class ClassData
    {
        //Atributos
        public DateTime dataAtual = DateTime.Now;

    }
}
