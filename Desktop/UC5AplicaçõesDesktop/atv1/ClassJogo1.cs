using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace atv1
{
    public class ClassJogo1
    {

        public string jurName;
        public string game;
        public string graficos;
        public string gameplay;
        public string historia;
        public string imersao;
        public string path = Path.GetFullPath(@"VotosJogo1.txt");

        public void Record()
        {
            StreamWriter meuTxT;
            meuTxT = File.AppendText(path);
            string votos = $"Votos do {jurName} para {game} são: \n Gráficos: {graficos} \n Gameplay: {gameplay} \n História: {historia} \n Imersão: {imersao}";
            meuTxT.WriteLine(votos);
            meuTxT.Close();
        }
        
        

    }
}
