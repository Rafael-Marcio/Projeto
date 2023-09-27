using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace OrientadaObjetoEx9Eletronico
{
    public partial class Form1 : Form
    {
        class Eletronico
        {
            //Atributos

            public string produto;
            public double preco;
            public string fabricante;
            public int desconto;

            //Metodos

            public double Desconto()
            {
                return (desconto / 100) * preco;
            }
        }

        //Criando objeto Global 
            Eletronico eletronico = new Eletronico();

        public Form1()
        {
            InitializeComponent();
        }

        private void panel1_Paint(object sender, PaintEventArgs e)
        {

        }

        private void Calcular_Click(object sender, EventArgs e)
        {
            eletronico.produto = produto.Text;
            eletronico.preco = double.Parse(preco.Text);
            eletronico.fabricante = Fabricante.Text;
            eletronico.desconto = int.Parse(desconto.Text);

            lblResposta.Text = eletronico.Desconto().ToString() + "R$ | Esse é o seu Desconto.";
            MessageBox.Show($"O seu desconto é: {eletronico.Desconto()}", "Desconto", MessageBoxButtons.OK, MessageBoxIcon.Information);
            
        }
    }
}
