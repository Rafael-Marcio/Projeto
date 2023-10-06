using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace FormCosme
{
    public class ClassTexto
    {
        //Atributos
        public String TextoNaTextBox;
        public String way = Path.GetFullPath(@"Dados.txt");

        //Methods

        public void Gravar()
        {

            //Escreve no Txt
            StreamWriter meuTxt;

            //Abre o Txt no Final
            meuTxt = File.AppendText(way);

            //Escreve no Txt
            meuTxt.WriteLine(TextoNaTextBox);

            //Fecha o Txt
            meuTxt.Close();

        }

        public void Limpar()
        {

            FileInfo meuTxt = new FileInfo(way);

            if (meuTxt.Exists)
            {
                meuTxt.Create();
                MessageBox.Show("Arquivo Limpo");

            }

        }

        public String Ler()
        {

            var ArquivoLido = new StreamReader(way);
            String Li_o_Arquivo = ArquivoLido.ReadToEnd();
            ArquivoLido.Close();
            return Li_o_Arquivo;

        }

        public List<String> MontarLista()
        {

            //Montando a Lista usando o Split
            String[] LinhasNoTxt = File.ReadAllLines(way);

            List<String> coluna1 = new List<string>();

            foreach (String line in LinhasNoTxt)
            {

                var informacoes = line.Split('#');
                coluna1.Add(informacoes[0]);

            }

            return coluna1;

        }


    }
}
