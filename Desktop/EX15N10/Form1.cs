namespace EX15N10
{
    public partial class Form1 : Form
    {
        class Media
        {
            public string name1;
            public int age;
            public float nota1;
            public float nota2;
            public float soma;

            public string Aprov(){
                return $"Nome:{name1} \n Idade:{age} \n Status: Aprovado! \n Nota:{soma}";
                
            }
            public string Dist()
            {
                return $"Status: Aprovado com Distinção! \n Nota:{soma}";

            }
            public string Reprov()
            {
                return $"Status: Reprovado! \n Nota:{soma}";

            }
        }
        Media mediaAlu = new Media();
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void btnCalc_Click(object sender, EventArgs e)
        {
            mediaAlu.name1 = txtName.Text;
            mediaAlu.age = int.Parse(txtAge.Text);
            mediaAlu.nota1 = float.Parse(txtNota1.Text);
            mediaAlu.nota2 = float.Parse(txtNota2.Text);
            mediaAlu.soma = (mediaAlu.nota1 + mediaAlu.nota2) / 2;
            if (mediaAlu.soma < 7)
            {
                labelResp.Text = mediaAlu.Reprov();
            }
            else if(mediaAlu.soma > 7 && mediaAlu.soma< 10)
            {
                labelResp.Text = mediaAlu.Aprov();
            }
            else if(mediaAlu.soma == 10)
            {
                labelResp.Text = mediaAlu.Dist();
            }
        }
    }
}