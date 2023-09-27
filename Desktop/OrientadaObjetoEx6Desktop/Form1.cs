using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace OrientadaObjetoEx6Desktop
{
    public partial class Form1 : Form
    {
        class Email
        {
            //Atributos 

            public string remetente;
            public string destinatario;
            public string assunto;
            public string corpo;

            //metodos

            public string Enviar()
            {
                return $" Para {destinatario}, \n Vou falar sobre {assunto}, \n {corpo} \n Ass:{remetente} \n Esse email foi enviado com sucesso!";
            }
            public string Exibir()
            {
                return $" Para {destinatario}, \n Vou falar sobre {assunto}, \n {corpo} \n Ass:{remetente}";
            }
            public string Receber()
            {
                return $" Você recebeu um e-mail!";
            }
        }

        //Criando Objeto global
            Email email = new Email();


        public Form1()
        {
            InitializeComponent();
        }

        private void Execute_Click(object sender, EventArgs e)
        {
            email.remetente = remetente.Text;
            email.destinatario = destinatario.Text;
            email.assunto = assunto.Text;
            email.corpo = Corpo.Text;

            lblResposta.Text = email.Exibir();

        }

        private void Enviar_Click(object sender, EventArgs e)
        {
            email.remetente = remetente.Text;
            email.destinatario = destinatario.Text;
            email.assunto = assunto.Text;
            email.corpo = Corpo.Text;

            lblResposta.Text = email.Enviar();
        }

        private void Receber_Click(object sender, EventArgs e)
        {
            lblResposta.Text = email.Receber();
        }
    }
}
