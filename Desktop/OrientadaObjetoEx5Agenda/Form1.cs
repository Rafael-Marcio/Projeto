using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace OrientadaObjetoEx5Agenda
{
    public partial class Form1 : Form
    {
        class Agenda
        {
            //Atributos

            public string Name;
            public string Telefone;
            public string email;

            //metodo

            public string BuscName()
            {
                return $" O contato que procura é: \n{Name}\n{Telefone}\n{email}";
            }
            public string BuscTel()
            {
                return $" O contato que procura é: \n{Name}\n{Telefone}\n{email}";
            }
        }
        //Criando objeto GLOBAL
            Agenda agenda = new Agenda();


        public Form1()
        {
            InitializeComponent();
        }

        private void BuscName_Click(object sender, EventArgs e)
        {
            agenda.Name = nome.Text;
            agenda.Telefone = telefone.Text;
            agenda.email = email.Text;
            lblResposta.Text = agenda.BuscName();
        }

        private void BuscTel_Click(object sender, EventArgs e)
        {
            agenda.Name = nome.Text;
            agenda.Telefone = telefone.Text;
            agenda.email = email.Text;
            lblResposta.Text = agenda.BuscTel();
        }
    }
}
