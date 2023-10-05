using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace ListBox_Ex1
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }
        //Criando Lista de Nomes
        List<string> Nomes = new List<string>();
        private void Adicionar_Click(object sender, EventArgs e)
        {
            //Pegando Lista
            Nomes.Add(txtAdd.Text);
            //Pegando o Primeiro elemento da Lista
            lbxResposta.Items.Add(Nomes[0]);
            //Limpando Lista
            Nomes.Clear();
            txtAdd.Focus();
            txtAdd.Clear();
        }

        private void Limpar_Click(object sender, EventArgs e)
        {
            lbxResposta.ClearSelected();
        }
    }
}
