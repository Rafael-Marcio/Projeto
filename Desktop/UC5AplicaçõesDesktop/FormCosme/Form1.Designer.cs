namespace FormCosme
{
    partial class Form1
    {
        /// <summary>
        /// Variável de designer necessária.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Limpar os recursos que estão sendo usados.
        /// </summary>
        /// <param name="disposing">true se for necessário descartar os recursos gerenciados; caso contrário, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Código gerado pelo Windows Form Designer

        /// <summary>
        /// Método necessário para suporte ao Designer - não modifique 
        /// o conteúdo deste método com o editor de código.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form1));
            this.panel1 = new System.Windows.Forms.Panel();
            this.lstBox_Nomes = new System.Windows.Forms.ListBox();
            this.txtNome = new System.Windows.Forms.TextBox();
            this.btnAdicionar = new System.Windows.Forms.Button();
            this.txtAdicionar = new System.Windows.Forms.TextBox();
            this.panel2 = new System.Windows.Forms.Panel();
            this.lblSelecionado = new System.Windows.Forms.Label();
            this.lblPath = new System.Windows.Forms.Label();
            this.lblPosicao = new System.Windows.Forms.Label();
            this.panel1.SuspendLayout();
            this.SuspendLayout();
            // 
            // panel1
            // 
            this.panel1.Controls.Add(this.lstBox_Nomes);
            this.panel1.Controls.Add(this.txtNome);
            this.panel1.Controls.Add(this.btnAdicionar);
            this.panel1.Controls.Add(this.txtAdicionar);
            this.panel1.Location = new System.Drawing.Point(80, 38);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(650, 329);
            this.panel1.TabIndex = 0;
            // 
            // lstBox_Nomes
            // 
            this.lstBox_Nomes.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lstBox_Nomes.FormattingEnabled = true;
            this.lstBox_Nomes.ItemHeight = 25;
            this.lstBox_Nomes.Location = new System.Drawing.Point(348, 165);
            this.lstBox_Nomes.Name = "lstBox_Nomes";
            this.lstBox_Nomes.Size = new System.Drawing.Size(254, 154);
            this.lstBox_Nomes.TabIndex = 3;
            this.lstBox_Nomes.SelectedIndexChanged += new System.EventHandler(this.lstBox_Nomes_SelectedIndexChanged);
            // 
            // txtNome
            // 
            this.txtNome.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtNome.Location = new System.Drawing.Point(50, 165);
            this.txtNome.Multiline = true;
            this.txtNome.Name = "txtNome";
            this.txtNome.ScrollBars = System.Windows.Forms.ScrollBars.Vertical;
            this.txtNome.Size = new System.Drawing.Size(263, 154);
            this.txtNome.TabIndex = 2;
            // 
            // btnAdicionar
            // 
            this.btnAdicionar.Font = new System.Drawing.Font("Microsoft Sans Serif", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnAdicionar.Location = new System.Drawing.Point(50, 86);
            this.btnAdicionar.Name = "btnAdicionar";
            this.btnAdicionar.Size = new System.Drawing.Size(552, 39);
            this.btnAdicionar.TabIndex = 1;
            this.btnAdicionar.Text = "Adicionar";
            this.btnAdicionar.UseVisualStyleBackColor = true;
            this.btnAdicionar.Click += new System.EventHandler(this.btnAdicionar_Click);
            // 
            // txtAdicionar
            // 
            this.txtAdicionar.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtAdicionar.Location = new System.Drawing.Point(50, 32);
            this.txtAdicionar.Name = "txtAdicionar";
            this.txtAdicionar.Size = new System.Drawing.Size(552, 31);
            this.txtAdicionar.TabIndex = 0;
            // 
            // panel2
            // 
            this.panel2.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("panel2.BackgroundImage")));
            this.panel2.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Stretch;
            this.panel2.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.panel2.Location = new System.Drawing.Point(130, 374);
            this.panel2.Name = "panel2";
            this.panel2.Size = new System.Drawing.Size(263, 121);
            this.panel2.TabIndex = 1;
            // 
            // lblSelecionado
            // 
            this.lblSelecionado.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.lblSelecionado.Location = new System.Drawing.Point(428, 374);
            this.lblSelecionado.Name = "lblSelecionado";
            this.lblSelecionado.Size = new System.Drawing.Size(254, 60);
            this.lblSelecionado.TabIndex = 2;
            // 
            // lblPath
            // 
            this.lblPath.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.lblPath.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblPath.Location = new System.Drawing.Point(12, 498);
            this.lblPath.Name = "lblPath";
            this.lblPath.Size = new System.Drawing.Size(798, 41);
            this.lblPath.TabIndex = 3;
            this.lblPath.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // lblPosicao
            // 
            this.lblPosicao.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.lblPosicao.Location = new System.Drawing.Point(428, 434);
            this.lblPosicao.Name = "lblPosicao";
            this.lblPosicao.Size = new System.Drawing.Size(254, 61);
            this.lblPosicao.TabIndex = 4;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(822, 548);
            this.Controls.Add(this.lblPosicao);
            this.Controls.Add(this.lblPath);
            this.Controls.Add(this.lblSelecionado);
            this.Controls.Add(this.panel2);
            this.Controls.Add(this.panel1);
            this.Name = "Form1";
            this.Text = "Form1";
            this.Load += new System.EventHandler(this.Form1_Load);
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.ListBox lstBox_Nomes;
        private System.Windows.Forms.TextBox txtNome;
        private System.Windows.Forms.Button btnAdicionar;
        private System.Windows.Forms.TextBox txtAdicionar;
        private System.Windows.Forms.Panel panel2;
        private System.Windows.Forms.Label lblSelecionado;
        private System.Windows.Forms.Label lblPath;
        private System.Windows.Forms.Label lblPosicao;
    }
}

