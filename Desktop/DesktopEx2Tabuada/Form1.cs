using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace DesktopEx2Tabuada
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            lblResposta.Text = "";
            for (int i = 1; i < 11; i++)
            {
                int num = int.Parse(number.Text);
                int calc = i * num;
                lblResposta.Text += $" {num} x {i} = {calc}. \n"; 
            }
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }
    }
}
