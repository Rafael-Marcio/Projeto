namespace Ex1Desktop
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
            this.Title = new System.Windows.Forms.Label();
            this.Peso_Ideal = new System.Windows.Forms.Button();
            this.IMC = new System.Windows.Forms.Button();
            this.panel1 = new System.Windows.Forms.Panel();
            this.panel1.SuspendLayout();
            this.SuspendLayout();
            // 
            // Title
            // 
            this.Title.Font = new System.Drawing.Font("Microsoft Sans Serif", 24F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.Title.Location = new System.Drawing.Point(62, 86);
            this.Title.Name = "Title";
            this.Title.Size = new System.Drawing.Size(212, 40);
            this.Title.TabIndex = 0;
            this.Title.Text = "Nutricionistas";
            // 
            // Peso_Ideal
            // 
            this.Peso_Ideal.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.Peso_Ideal.Location = new System.Drawing.Point(32, 164);
            this.Peso_Ideal.Name = "Peso_Ideal";
            this.Peso_Ideal.Size = new System.Drawing.Size(98, 69);
            this.Peso_Ideal.TabIndex = 1;
            this.Peso_Ideal.Text = "Peso Ideal";
            this.Peso_Ideal.UseVisualStyleBackColor = true;
            // 
            // IMC
            // 
            this.IMC.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.IMC.Location = new System.Drawing.Point(206, 164);
            this.IMC.Name = "IMC";
            this.IMC.Size = new System.Drawing.Size(98, 69);
            this.IMC.TabIndex = 2;
            this.IMC.Text = "IMC";
            this.IMC.UseVisualStyleBackColor = true;
            // 
            // panel1
            // 
            this.panel1.Controls.Add(this.IMC);
            this.panel1.Controls.Add(this.Title);
            this.panel1.Controls.Add(this.Peso_Ideal);
            this.panel1.Location = new System.Drawing.Point(47, 33);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(337, 352);
            this.panel1.TabIndex = 3;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(433, 443);
            this.Controls.Add(this.panel1);
            this.Name = "Form1";
            this.Text = "Form1";
            this.panel1.ResumeLayout(false);
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Label Title;
        private System.Windows.Forms.Button Peso_Ideal;
        private System.Windows.Forms.Button IMC;
        private System.Windows.Forms.Panel panel1;
    }
}

