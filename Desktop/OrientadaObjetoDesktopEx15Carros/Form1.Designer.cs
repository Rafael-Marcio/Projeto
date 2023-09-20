namespace OrientadaObjetoDesktopEx15Carros
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
            this.label1 = new System.Windows.Forms.Label();
            this.panel1 = new System.Windows.Forms.Panel();
            this.label2 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.marca = new System.Windows.Forms.TextBox();
            this.modelo = new System.Windows.Forms.TextBox();
            this.ano = new System.Windows.Forms.TextBox();
            this.ligar = new System.Windows.Forms.Button();
            this.desligar = new System.Windows.Forms.Button();
            this.acelerar = new System.Windows.Forms.Button();
            this.lblRespostaInformacoes = new System.Windows.Forms.Label();
            this.lblRespostaVelocidade = new System.Windows.Forms.Label();
            this.panel1.SuspendLayout();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 24F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(334, 39);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(120, 37);
            this.label1.TabIndex = 0;
            this.label1.Text = "Carros";
            // 
            // panel1
            // 
            this.panel1.Controls.Add(this.acelerar);
            this.panel1.Controls.Add(this.desligar);
            this.panel1.Controls.Add(this.ligar);
            this.panel1.Controls.Add(this.ano);
            this.panel1.Controls.Add(this.modelo);
            this.panel1.Controls.Add(this.marca);
            this.panel1.Controls.Add(this.label4);
            this.panel1.Controls.Add(this.label3);
            this.panel1.Controls.Add(this.label2);
            this.panel1.Location = new System.Drawing.Point(238, 79);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(327, 180);
            this.panel1.TabIndex = 1;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.Location = new System.Drawing.Point(17, 21);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(78, 25);
            this.label2.TabIndex = 0;
            this.label2.Text = "Marca:";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.Location = new System.Drawing.Point(17, 47);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(89, 25);
            this.label3.TabIndex = 1;
            this.label3.Text = "Modelo:";
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Font = new System.Drawing.Font("Microsoft Sans Serif", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label4.Location = new System.Drawing.Point(17, 76);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(61, 29);
            this.label4.TabIndex = 2;
            this.label4.Text = "Ano:";
            // 
            // marca
            // 
            this.marca.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.marca.Location = new System.Drawing.Point(154, 21);
            this.marca.Multiline = true;
            this.marca.Name = "marca";
            this.marca.Size = new System.Drawing.Size(126, 25);
            this.marca.TabIndex = 3;
            // 
            // modelo
            // 
            this.modelo.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.modelo.Location = new System.Drawing.Point(154, 53);
            this.modelo.Multiline = true;
            this.modelo.Name = "modelo";
            this.modelo.Size = new System.Drawing.Size(126, 25);
            this.modelo.TabIndex = 4;
            // 
            // ano
            // 
            this.ano.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.ano.Location = new System.Drawing.Point(154, 85);
            this.ano.Multiline = true;
            this.ano.Name = "ano";
            this.ano.Size = new System.Drawing.Size(126, 25);
            this.ano.TabIndex = 5;
            // 
            // ligar
            // 
            this.ligar.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.ligar.Location = new System.Drawing.Point(22, 129);
            this.ligar.Name = "ligar";
            this.ligar.Size = new System.Drawing.Size(73, 39);
            this.ligar.TabIndex = 6;
            this.ligar.Text = "Ligar";
            this.ligar.UseVisualStyleBackColor = true;
            this.ligar.Click += new System.EventHandler(this.ligar_Click);
            // 
            // desligar
            // 
            this.desligar.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.desligar.Location = new System.Drawing.Point(103, 129);
            this.desligar.Name = "desligar";
            this.desligar.Size = new System.Drawing.Size(89, 39);
            this.desligar.TabIndex = 7;
            this.desligar.Text = "Desligar";
            this.desligar.UseVisualStyleBackColor = true;
            // 
            // acelerar
            // 
            this.acelerar.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.acelerar.Location = new System.Drawing.Point(198, 129);
            this.acelerar.Name = "acelerar";
            this.acelerar.Size = new System.Drawing.Size(82, 39);
            this.acelerar.TabIndex = 8;
            this.acelerar.Text = "Acelerar";
            this.acelerar.UseVisualStyleBackColor = true;
            // 
            // lblRespostaInformacoes
            // 
            this.lblRespostaInformacoes.AutoSize = true;
            this.lblRespostaInformacoes.Font = new System.Drawing.Font("Microsoft Sans Serif", 21.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblRespostaInformacoes.Location = new System.Drawing.Point(308, 291);
            this.lblRespostaInformacoes.Name = "lblRespostaInformacoes";
            this.lblRespostaInformacoes.Size = new System.Drawing.Size(165, 33);
            this.lblRespostaInformacoes.TabIndex = 2;
            this.lblRespostaInformacoes.Text = "Mensagens";
            // 
            // lblRespostaVelocidade
            // 
            this.lblRespostaVelocidade.AutoSize = true;
            this.lblRespostaVelocidade.Font = new System.Drawing.Font("Microsoft Sans Serif", 21.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblRespostaVelocidade.Location = new System.Drawing.Point(308, 340);
            this.lblRespostaVelocidade.Name = "lblRespostaVelocidade";
            this.lblRespostaVelocidade.Size = new System.Drawing.Size(159, 33);
            this.lblRespostaVelocidade.TabIndex = 3;
            this.lblRespostaVelocidade.Text = "Velocidade";
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.lblRespostaVelocidade);
            this.Controls.Add(this.lblRespostaInformacoes);
            this.Controls.Add(this.panel1);
            this.Controls.Add(this.label1);
            this.Name = "Form1";
            this.Text = "Form1";
            this.Load += new System.EventHandler(this.Form1_Load);
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.Button acelerar;
        private System.Windows.Forms.Button desligar;
        private System.Windows.Forms.Button ligar;
        private System.Windows.Forms.TextBox ano;
        private System.Windows.Forms.TextBox modelo;
        private System.Windows.Forms.TextBox marca;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label lblRespostaInformacoes;
        private System.Windows.Forms.Label lblRespostaVelocidade;
    }
}

