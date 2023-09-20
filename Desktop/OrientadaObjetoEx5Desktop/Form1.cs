using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace OrientadaObjetoEx5Desktop
{
    public partial class Form1 : Form
    {
        class Triangulo
        {
            public double lados1;
            public double lados3;

            //Método

            public double area()
            {

                return lados3 * lados1 / 2;
            }
            public string limpar()
            {
                return "";
            }
        }
        public Form1()
        {
            InitializeComponent();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void Calcular_Click(object sender, EventArgs e)
        {
            Triangulo triangulo = new Triangulo();

            triangulo.lados1 = double.Parse(lado1.Text);
            triangulo.lados3 = double.Parse(lado3.Text);
            double resp =  triangulo.area();
            lblResposta.Text = $"A área é: {resp}";

        }

        private void lado1_TextChanged(object sender, EventArgs e)
        {

        }

        private void limpar_Click(object sender, EventArgs e)
        {
            Triangulo triangulo = new Triangulo();

            lblResposta.Text = triangulo.limpar();
        }

        private void groupBox1_Enter(object sender, EventArgs e)
        {

        }
    }
}
