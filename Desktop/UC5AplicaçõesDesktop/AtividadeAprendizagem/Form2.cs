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
    public partial class Form2 : Form
    {
        //Objeto Global
        ClassTxt classTxt = new ClassTxt();
        public Form2()
        {
            InitializeComponent();
        }

        private void Form2_Load(object sender, EventArgs e)
        {
            billofSale.Text = classTxt.ReadArchive();
        }
    }
}
