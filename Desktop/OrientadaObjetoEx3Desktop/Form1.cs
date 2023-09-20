using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace OrientadaObjetoEx3Desktop
{
    public partial class Form1 : Form
    {
        class Animal
        {
            //Atributos

            public string especie;
            public string nome;
            public int idade;

            //Metodos

            public string Cachorro()
            {
                return $"O {nome} latiu aos {idade} anos!";
            }
            public string Gato()
            {
                return $"O {nome} miou aos {idade} anos!";
            }
        }
        public Form1()
        {
            InitializeComponent();
        }

        private void Chamar_Click(object sender, EventArgs e)
        {
            Animal animal = new Animal();

            animal.especie = especie.Text;
            animal.nome = nome.Text;
            animal.idade = int.Parse(idade.Text);

            if (animal.especie == "Cachorro")
            {
                lblResposta.Text = animal.Cachorro();
            }
            else
            {
                lblResposta.Text = animal.Gato();
            }
        }
    }
}
