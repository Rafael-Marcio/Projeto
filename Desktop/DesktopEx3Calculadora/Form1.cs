using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace DesktopEx3Calculadora
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void tittle_Click(object sender, EventArgs e)
        {

        }

        private void button3_Click(object sender, EventArgs e)
        {
            int num1 = int.Parse(number1.Text);
            int num2 = int.Parse(number2.Text);
            int calc = num1 + num2;
            lblResposta.Text = $"O resultado é:  {calc}";
            number1.Focus();

        }

        private void panel1_Paint(object sender, PaintEventArgs e)
        {

        }

        private void multi_Click(object sender, EventArgs e)
        {
            int num1 = int.Parse(number1.Text);
            int num2 = int.Parse(number2.Text);
            int calc = num1 * num2;
            lblResposta.Text = $"O resultado é:  {calc}";
            number1.Focus();

        }

        private void divisao_Click(object sender, EventArgs e)
        {
            int num1 = int.Parse(number1.Text);
            int num2 = int.Parse(number2.Text);
            int calc = num1 / num2;
            lblResposta.Text = $"O resultado é:  {calc}";
            number1.Focus();

        }

        private void subtracao_Click(object sender, EventArgs e)
        {
            int num1 = int.Parse(number1.Text);
            int num2 = int.Parse(number2.Text);
            int calc = num1 - num2;
            lblResposta.Text = $"O resultado é:  {calc}";
            number1.Focus();

        }
    }
}
