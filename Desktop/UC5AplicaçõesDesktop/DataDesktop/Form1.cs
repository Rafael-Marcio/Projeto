using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace DataDesktop
{
    public partial class Form1 : Form
    {
        //Objeto Global
        Class_Data class_data = new Class_Data();

        public Form1()
        {
            InitializeComponent();
        }
        

        private void Adicionar_Click(object sender, EventArgs e)
        {
            class_data.diasAdicionar = int.Parse(txtAdicionar.Text);
            lblAdicionar.Text = class_data.AdicionarDias();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            lblDataAtual.Text = class_data.dataATUAL.ToShortDateString();
            lblHoraAtual.Text = class_data.dataATUAL.ToShortTimeString();
        }

        private void Comparar_Click(object sender, EventArgs e)
        {
            class_data.data1 = Data2.Value;
            class_data.data2 = Data1.Value;
            lblComparar.Text = class_data.CompararData();
        }
    }
}
