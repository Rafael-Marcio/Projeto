using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace DataDesktop2
{
    public partial class Form1 : Form
    {
        //Objeto Global
        Class_DATA class_Data = new Class_DATA();
        public Form1()
        {
            InitializeComponent();
        }

        private void Comparar_Click(object sender, EventArgs e)
        {
            class_Data.dataNascimento = DataNascimento.Value;
            lblComparar.Text = class_Data.DiasVida();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            lblDataAtual.Text = class_Data.dataAtual.ToShortDateString();
            lblHoraAtual.Text = class_Data.dataAtual.ToShortTimeString();
        }
    }
}
