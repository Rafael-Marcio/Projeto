using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace OrientadaObjetoEx2Desktop
{
    public partial class Form1 : Form
    {
        class Produto
        {
            public string product;
            public string action;

            public string Adicionar()
            {
                return $"O produto: {product} foi adicionado com sucesso!";
            }
            public string Remover()
            {
                return $"O produto: {product} foi removido com sucesso!";
            }
        }
        public Form1()
        {
            InitializeComponent();
        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void Execute_Click(object sender, EventArgs e)
        {
            Produto produto = new Produto();
            produto.product = Produ.Text;
            produto.action = action.Text;

            if (produto.action == "Adicionar")
            {
                lblResposta.Text = produto.Adicionar();
            }
            else if (produto.action == "Remover")
            {
                lblResposta.Text = produto.Remover();
            }
        }
    }
}
