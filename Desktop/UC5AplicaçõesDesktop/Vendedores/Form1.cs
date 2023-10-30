using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Vendedores
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        Conexao conn = new Conexao();

        private void btn_Click(object sender, EventArgs e)
        {
            bool test = conn.GetData1("SELECT * FROM sistema_vendedores WHERE @Nome_Vendedor = '" + txtNome.Text + "%'");
            if (btn.Text == "Adicionar")
            {
                LimparText();
                btn.Text = "Salvar";
                txtNome.Enabled = true;
                txtTelefone.Enabled = true;
                txtEmail.Enabled = true;

            }
            else
            {
                if (test == false){
                    btn.Text = "Adicionar";
                    conn.InserirConexao(txtNome.Text, txtTelefone.Text, txtEmail.Text);
                    LimparText();
                    atualizarGrid();
                    txtNome.Enabled = false;
                    txtTelefone.Enabled = false;
                    txtEmail.Enabled = false;
                    
                }
                else if(test == true)
                {
                    btn.Text = "Adicionar";
                    conn.Atualizar(txtNome.Text, txtTelefone.Text, txtEmail.Text, int.Parse(lblID.Text));
                    dataGrid.Refresh();
                    atualizarGrid();
                    LimparText();
                    txtNome.Enabled = false;
                    txtTelefone.Enabled = false;
                    txtEmail.Enabled = false;
                }
                

            }
        }
        private void atualizarGrid()
        {
            dataGrid.DataSource = conn.GetData("SELECT * FROM sistema_vendedores ORDER BY ID");
            dataGrid.Refresh();
        }

        public void LimparText()
        {
            txtNome.Clear();
            txtTelefone.Clear();
            txtEmail.Clear();
            txtNome.Focus();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            Boolean resposta = conn.AbrirConexao();
            if (resposta == true)
            {
                //MessageBox.Show("Banco de Dados conectado com sucesso", "", MessageBoxButtons.OK, MessageBoxIcon.Information);
                dataGrid.DataSource = conn.GetData("Select * FROM sistema_vendedores ORDER BY ID");
            }
            txtNome.Enabled = false;
            txtTelefone.Enabled = false;
            txtEmail.Enabled = false;
        }

        private void btnEditar_Click(object sender, EventArgs e)
        {
            conn.Atualizar(txtNome.Text, txtTelefone.Text, txtEmail.Text, int.Parse(lblID.Text));
            dataGrid.Refresh();
            atualizarGrid();
            LimparText();
        }

        private void btnDeletar_Click(object sender, EventArgs e)
        {
            dataGrid.DataSource = conn.ExecuteQuery("DELETE FROM sistema_vendedores WHERE ID LIKE '%" + lblID.Text + "%'");
            dataGrid.Refresh();
            atualizarGrid();
            LimparText();
        }

        private void dataGrid_CellClick(object sender, DataGridViewCellEventArgs e)
        {
            lblID.Text = dataGrid.CurrentRow.Cells[0].Value.ToString();
            txtNome.Text = dataGrid.CurrentRow.Cells[1].Value.ToString();
            txtEmail.Text = dataGrid.CurrentRow.Cells[2].Value.ToString();
            txtTelefone.Text = dataGrid.CurrentRow.Cells[3].Value.ToString();
        }
    }
}
