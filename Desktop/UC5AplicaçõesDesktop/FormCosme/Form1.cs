using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace FormCosme
{
    public partial class Form1 : Form
    {
        //Criando uma Lista de Nomes
        List<string> Nomes = new List<string>();

        //Global Object
        ClassTexto texto = new ClassTexto();

        public Form1()
        {
            InitializeComponent();
        }

        private void btnAdicionar_Click(object sender, EventArgs e)
        {

            //Adicionando na Lista
            texto.TextoNaTextBox = txtAdicionar.Text;
            texto.Gravar();
            PreencherListBox();
            txtNome.Text = texto.Ler();

            //Limpando a Lista
            Nomes.Clear();
            txtAdicionar.Clear();
            txtAdicionar.Focus();

        }
        private void Form1_Load(object sender, EventArgs e)
        {
            txtAdicionar.Focus();
            txtNome.Text = texto.Ler();
            PreencherListBox();
            lblPath.Text = texto.way.ToString();
        }
        private void PreencherListBox()
        {
            lstBox_Nomes.Items.Clear();
            //Montando a coluna1
            List<string> cidades = texto.MontarLista();
            for (int i = 0; i < cidades.Count; i++)
            {
                lstBox_Nomes.Items.Add(cidades[i]);
            }
        }

        private void lstBox_Nomes_SelectedIndexChanged(object sender, EventArgs e)
        {
            lblSelecionado.Text = lstBox_Nomes.SelectedItem.ToString();
            lblPosicao.Text = "Pos: " + lstBox_Nomes.SelectedIndex.ToString();

        }
    }
}
