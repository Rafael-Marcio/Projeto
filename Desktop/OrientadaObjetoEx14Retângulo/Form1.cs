using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace OrientadaObjetoEx14Retângulo
{
    public partial class Form1 : Form
    {
        class Retangulo
        {
            //Atributos
            public double alt;
            public double larg;

            //Metodos

            public double Perimetro()
            {
                return alt * 2 + larg * 2;
            }
            public double Area()
            {
                return alt * larg;
            }
        }

        //Criando Objeto Global
            Retangulo retangulo = new Retangulo();
        public Form1()
        {
            InitializeComponent();
        }

        private void CalcularMedia_Click(object sender, EventArgs e)
        {
            retangulo.alt = double.Parse(Altura.Text);
            retangulo.larg = double.Parse(Largura.Text);

            lblResposta.Text = retangulo.Perimetro().ToString() + "m";
        }

        private void area_Click(object sender, EventArgs e)
        {
            retangulo.alt = double.Parse(Altura.Text);
            retangulo.larg = double.Parse(Largura.Text);

            lblResposta.Text = retangulo.Area().ToString() + "m²";
        }
    }
}
