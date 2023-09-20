using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace OrientadaObjetoDesktopEx15Carros
{
    public partial class Form1 : Form
    {
        class Carro
        {
            //atributos

            public string marca;
            public string modelo;
            public int ano;
            public int velocidade;

            //metodos

            public string Ligar()
            {
                return $"O carro ligou!";
            }
            public string Desligar()
            {
                return $"O carro desligou!";
            }
            public int Acelerar()
            {
                return velocidade = velocidade + 10;
            }
            public int Velocidade()
            {
                return velocidade;
            }
        }
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void ligar_Click(object sender, EventArgs e)
        {
            Carro carro = new Carro();

            lblRespostaInformacoes.Text = carro.Ligar();
        }
    }
}
