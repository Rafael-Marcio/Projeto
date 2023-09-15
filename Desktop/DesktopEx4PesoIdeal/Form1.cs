using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace DesktopEx4PesoIdeal
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void calcular_Click(object sender, EventArgs e)
        {
            string sex = sexo.Text;
            if (sex == "Masculino" || sex == "masculino")
            {
                double alt = double.Parse(altura.Text);
                lblResposta.Text = $"O seu peso ideal é: \n {72.7 * alt - 58}";
            }
            else if (sex == "Feminino" || sex == "feminino")
            {
                double alt = double.Parse(altura.Text);
                lblResposta.Text = $"O seu peso ideal é: \n {62.1 * alt - 44.7}";
            }
        }
    }
}
