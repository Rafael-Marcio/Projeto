using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace TesteSQL
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }
        Conexao conn = new Conexao();

        private void Form1_Load(object sender, EventArgs e)
        {
            //Abrindo a conexão e testando 


            Boolean resposta =conn.AbrirConexao();
            if(resposta == true)
            {
                //MessageBox.Show("Banco de Dados conectado com sucesso", "", MessageBoxButtons.OK, MessageBoxIcon.Information);
                dataGridView1.DataSource = conn.GetData("Select * FROM alunos ORDER BY nome");
                formatarGrid();
            }

        }

        private void formatarGrid()
        {
            dataGridView1.Columns[1].HeaderText = "Nome do Aluno";
            dataGridView1.Columns[1].Width = 464;
        }

        private void atualizarGrid()
        {
            dataGridView1.DataSource = conn.GetData("SELECT * FROM alunos WHERE nome LIKE '%" + txtBusca.Text + "%' ORDER BY nome");
            dataGridView1.Refresh();
        }

        private void txtBusca_TextChanged(object sender, EventArgs e)
        {
            atualizarGrid();
        }

        private void delete_Click(object sender, EventArgs e)
        {
            dataGridView1.DataSource = conn.ExecuteQuery("DELETE FROM alunos WHERE nome LIKE'%" + txtDelete.Text + "%'");
            dataGridView1.Refresh();
            atualizarGrid();
        }

        private void panel1_Paint(object sender, PaintEventArgs e)
        {

        }

        private void btnAdicionar_Click(object sender, EventArgs e)
        {
            conn.InserirConexao(txtAluno.Text, txtCell.Text, txtEmail.Text);
            atualizarGrid();
            LimparText();
        }

        private void NovoAluno_Click(object sender, EventArgs e)
        {
            LimparText();
        }
        public void LimparText()
        {
            txtAluno.Clear();
            txtEmail.Clear();
            txtCell.Clear();
            txtAluno.Focus();
        }

        private void dataGridView1_CellClick(object sender, DataGridViewCellEventArgs e)
        {
            lblAlunoSelecionado.Text = dataGridView1.CurrentRow.Cells[0].Value.ToString();
            txtAluno.Text = dataGridView1.CurrentRow.Cells[1].Value.ToString();
            txtCell.Text = dataGridView1.CurrentRow.Cells[3].Value.ToString();
            txtEmail.Text = dataGridView1.CurrentRow.Cells[2].Value.ToString();
        }

        private void Atualizar_Click(object sender, EventArgs e)
        {
            Boolean resposta = conn.AtualizarAluno(txtAluno.Text, txtCell.Text, txtEmail.Text, lblAlunoSelecionado.Text);
            atualizarGrid();
        }

       
    }
}
