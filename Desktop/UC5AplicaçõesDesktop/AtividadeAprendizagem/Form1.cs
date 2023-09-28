using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace AtividadeAprendizagem
{
    public partial class Form1 : Form
    {
        //Objeto Global
        ClassTxt classTxt = new ClassTxt();
        ClassData classData = new ClassData();
        public Form1()
        {
            InitializeComponent();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void Gravar_Click(object sender, EventArgs e)
        {
            classTxt.product = txtProduto.Text;
            classTxt.price = double.Parse(txtPreco.Text);
            classTxt.dataAtual = classData.dataAtual;
            classTxt.Save();
        }

        private void LerDados_Click(object sender, EventArgs e)
        {
            Form2 form2 = new Form2();
            form2.Show();
        }
    }
}
