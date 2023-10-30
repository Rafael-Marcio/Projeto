using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace TesteTrocaBTN
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        Conexao conn = new Conexao();

        private void button1_Click(object sender, EventArgs e)
        {
            if (button1.Text == "Adicionar")
            {
                LimparText();
                button1.Text = "Salvar";
                txtDesc.Enabled = true;
                txtFab.Enabled = true;
                txtValor.Enabled = true;
                txtQntd.Enabled = true;

            }
            else
            {
                button1.Text = "Adicionar";
                conn.InserirConexao(txtDesc.Text, txtFab.Text,$"R${txtValor.Text},00", int.Parse(txtQntd.Text));
                LimparText();
                atualizarGrid();
                txtDesc.Enabled = false;
                txtFab.Enabled = false;
                txtValor.Enabled = false;
                txtQntd.Enabled = false;

            }
        }
        private void atualizarGrid()
        {
            dataGrid.DataSource = conn.GetData("SELECT * FROM sistemaprodutos_produtos ORDER BY Descricao");
            dataGrid.Refresh();
        }

        public void LimparText()
        {
            txtDesc.Clear();
            txtFab.Clear();
            txtValor.Clear();
            txtQntd.Clear();
            txtDesc.Focus();
        }
       

        private void Form1_Load(object sender, EventArgs e)
        {
            Boolean resposta = conn.AbrirConexao();
            if (resposta == true)
            {
                //MessageBox.Show("Banco de Dados conectado com sucesso", "", MessageBoxButtons.OK, MessageBoxIcon.Information);
                dataGrid.DataSource = conn.GetData("Select * FROM sistemaprodutos_produtos ORDER BY ID");
            }
            txtDesc.Enabled = false;
            txtFab.Enabled = false;
            txtValor.Enabled = false;
            txtQntd.Enabled = false;
        }

        private void dataGrid_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            lblProdutoSelecionado.Text = dataGrid.CurrentRow.Cells[0].Value.ToString();
            txtDesc.Text = dataGrid.CurrentRow.Cells[1].Value.ToString();
            txtFab.Text = dataGrid.CurrentRow.Cells[2].Value.ToString();
            txtValor.Text = dataGrid.CurrentRow.Cells[3].Value.ToString();
            txtQntd.Text = dataGrid.CurrentRow.Cells[4].Value.ToString();
        }

        private void btnDeletar_Click(object sender, EventArgs e)
        {
            dataGrid.DataSource = conn.ExecuteQuery("DELETE FROM sistemaprodutos_produtos WHERE ID LIKE '%" + lblProdutoSelecionado.Text + "%'");
            dataGrid.Refresh();
            atualizarGrid();
            LimparText();
        }

        private void btnEditar_Click(object sender, EventArgs e)
        {
            conn.Atualizar(txtDesc.Text, txtFab.Text, txtValor.Text, int.Parse(txtQntd.Text), int.Parse(lblProdutoSelecionado.Text));
            dataGrid.Refresh();
            atualizarGrid();
            LimparText();
        }
    }
}
