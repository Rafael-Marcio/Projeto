using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace AgendaDesktopBancoDados
{
    public class Agenda
    {
        //Atributos

        public string nome;
        public string email;
        public string telefone;
        public string caminho = "C:/Users/968840/Desktop/GItHub_pasta/Projeto/Desktop/UC5AplicaçõesDesktop/AgendaDesktopBancoDados/BancoDadosAgenda.txt";

        //Metodos

        public void Gravar()
        {
            StreamWriter banco;
            banco = File.AppendText(caminho);
            banco.WriteLine($"{nome} - {email} - {telefone}");
            banco.Close();
        }
        public String Ler()
        {
            String linha;
            StreamReader banco = new StreamReader(caminho);
            linha = banco.ReadLine();
            if(linha == null)
            {
                return "Nenhum Arquivo para Ler!";
            }
            else
            {
                while (!banco.EndOfStream)
                {
                    linha += "\n" + banco.ReadLine();
                }


                return linha;
                banco.Close();
            }
        }
        public void Limpar()
        {
            FileInfo banco = new FileInfo(caminho);
            if (banco.Exists)
            {
                banco.CreateText();
            }
        }
    }
}
