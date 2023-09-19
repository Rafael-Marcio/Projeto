namespace OrientadaObjetoEx5Desktop
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
            this.panel1 = new System.Windows.Forms.Panel();
            this.label1 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.lado1 = new System.Windows.Forms.TextBox();
            this.lado3 = new System.Windows.Forms.TextBox();
            this.lado2 = new System.Windows.Forms.TextBox();
            this.Calcular = new System.Windows.Forms.Button();
            this.lblResposta = new System.Windows.Forms.Label();
            this.panel1.SuspendLayout();
            this.SuspendLayout();
            // 
            // panel1
            // 
            this.panel1.Controls.Add(this.lblResposta);
            this.panel1.Controls.Add(this.Calcular);
            this.panel1.Controls.Add(this.lado2);
            this.panel1.Controls.Add(this.lado3);
            this.panel1.Controls.Add(this.lado1);
            this.panel1.Controls.Add(this.label3);
            this.panel1.Controls.Add(this.label2);
            this.panel1.Controls.Add(this.label1);
            this.panel1.Location = new System.Drawing.Point(225, 36);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(361, 377);
            this.panel1.TabIndex = 0;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(37, 25);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(72, 25);
            this.label1.TabIndex = 0;
            this.label1.Text = "Lado1";
            this.label1.Click += new System.EventHandler(this.label1_Click);
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.Location = new System.Drawing.Point(37, 87);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(72, 25);
            this.label2.TabIndex = 1;
            this.label2.Text = "Lado2";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.Location = new System.Drawing.Point(37, 158);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(72, 25);
            this.label3.TabIndex = 2;
            this.label3.Text = "Lado3";
            // 
            // lado1
            // 
            this.lado1.Location = new System.Drawing.Point(170, 25);
            this.lado1.Multiline = true;
            this.lado1.Name = "lado1";
            this.lado1.Size = new System.Drawing.Size(149, 24);
            this.lado1.TabIndex = 3;
            // 
            // lado3
            // 
            this.lado3.Location = new System.Drawing.Point(170, 158);
            this.lado3.Multiline = true;
            this.lado3.Name = "lado3";
            this.lado3.Size = new System.Drawing.Size(149, 26);
            this.lado3.TabIndex = 4;
            // 
            // lado2
            // 
            this.lado2.Location = new System.Drawing.Point(170, 87);
            this.lado2.Multiline = true;
            this.lado2.Name = "lado2";
            this.lado2.Size = new System.Drawing.Size(149, 25);
            this.lado2.TabIndex = 5;
            // 
            // Calcular
            // 
            this.Calcular.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.Calcular.Location = new System.Drawing.Point(170, 235);
            this.Calcular.Name = "Calcular";
            this.Calcular.Size = new System.Drawing.Size(149, 39);
            this.Calcular.TabIndex = 6;
            this.Calcular.Text = "Calcular";
            this.Calcular.UseVisualStyleBackColor = true;
            this.Calcular.Click += new System.EventHandler(this.Calcular_Click);
            // 
            // lblResposta
            // 
            this.lblResposta.AutoSize = true;
            this.lblResposta.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblResposta.Location = new System.Drawing.Point(170, 312);
            this.lblResposta.Name = "lblResposta";
            this.lblResposta.Size = new System.Drawing.Size(0, 24);
            this.lblResposta.TabIndex = 7;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.panel1);
            this.Name = "Form1";
            this.Text = "Form1";
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label lblResposta;
        private System.Windows.Forms.Button Calcular;
        private System.Windows.Forms.TextBox lado2;
        private System.Windows.Forms.TextBox lado3;
        private System.Windows.Forms.TextBox lado1;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label2;
    }
}

