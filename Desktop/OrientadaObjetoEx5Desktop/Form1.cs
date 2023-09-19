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
            public double lados2;
            public double lados3;
            public double alt;

            //Método

            public double area()
            {

                return lados3 * alt / 2;
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
            triangulo.lados2 = double.Parse(lado2.Text);
            triangulo.lados3 = double.Parse(lado3.Text);
            triangulo.alt = (triangulo.lados1 + triangulo.lados2 + triangulo.lados3) / 2;
            double resp =  triangulo.area();
            lblResposta.Text = $"A área é: {resp}";

        }
    }
}
