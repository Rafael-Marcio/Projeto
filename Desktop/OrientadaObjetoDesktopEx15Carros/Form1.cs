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

            public string marcas;
            public string modelos;
            public int anos;
            public int velocidade;

            //metodos

            public string Ligar()
            {
                return $"O carro ligou!";
            }
            public string Desligar()
            {
                velocidade = 0;
                return $"O carro desligou!";
            }
            public int Acelerar()
            {
                return velocidade = velocidade + 10;
            }
            public string Informações()
            {
                return $"Marca: {marcas}\nModelo: {modelos} \nAno: {anos} ".ToString();
            }
        }
        Carro carro = new Carro();


        public Form1()
        {
            InitializeComponent();
        }



        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void ligar_Click(object sender, EventArgs e)
        {
            carro.marcas = marca.Text;
            carro.modelos = modelo.Text;
            if (marca.Text == "" || modelo.Text == "")
            {
                MessageBox.Show("Informações Inválidas!");
            }
            else
            {
                carro.anos = int.Parse(ano.Text);
                lblRespostaInformacoes.Text = carro.Ligar();
                lblRespostaVelocidade.Text = "0 Km/h";
                lblRespostaCarro.Text = carro.Informações();
                MessageBox.Show("O carro ligou...");
            }
            
        }

        private void desligar_Click(object sender, EventArgs e)
        {
            carro.marcas = marca.Text;
            carro.modelos = modelo.Text;
            carro.anos = int.Parse(ano.Text);
            lblRespostaInformacoes.Text = carro.Desligar();
            lblRespostaVelocidade.Text = "0 Km/h";
            lblRespostaCarro.Text = carro.Informações();
            MessageBox.Show("O carro desligou...");

        }

        private void acelerar_Click(object sender, EventArgs e)
        {
            carro.marcas = marca.Text;
            carro.modelos = modelo.Text;
            carro.anos = int.Parse(ano.Text);
            lblRespostaInformacoes.Text = "A sua Velocidade é: ";
            lblRespostaVelocidade.Text = carro.Acelerar().ToString() + " Km/h";
            lblRespostaCarro.Text = carro.Informações();

        }

        private void panel1_Paint(object sender, PaintEventArgs e)
        {

        }
    }
}
