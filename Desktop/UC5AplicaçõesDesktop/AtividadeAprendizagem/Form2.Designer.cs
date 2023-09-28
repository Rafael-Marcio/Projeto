namespace AtividadeAprendizagem
{
    partial class Form2
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form2));
            this.pnlResposta = new System.Windows.Forms.Panel();
            this.label4 = new System.Windows.Forms.Label();
            this.billofSale = new System.Windows.Forms.Label();
            this.pnlResposta.SuspendLayout();
            this.SuspendLayout();
            // 
            // pnlResposta
            // 
            this.pnlResposta.BackColor = System.Drawing.Color.Transparent;
            this.pnlResposta.Controls.Add(this.billofSale);
            this.pnlResposta.Controls.Add(this.label4);
            this.pnlResposta.Location = new System.Drawing.Point(188, 12);
            this.pnlResposta.Name = "pnlResposta";
            this.pnlResposta.Size = new System.Drawing.Size(415, 413);
            this.pnlResposta.TabIndex = 4;
            // 
            // label4
            // 
            this.label4.Font = new System.Drawing.Font("Script MT Bold", 24F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label4.ForeColor = System.Drawing.Color.DarkGreen;
            this.label4.Location = new System.Drawing.Point(68, 10);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(282, 38);
            this.label4.TabIndex = 0;
            this.label4.Text = "Nota Fiscal";
            this.label4.TextAlign = System.Drawing.ContentAlignment.TopCenter;
            // 
            // billofSale
            // 
            this.billofSale.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.billofSale.ImageAlign = System.Drawing.ContentAlignment.BottomRight;
            this.billofSale.Location = new System.Drawing.Point(34, 80);
            this.billofSale.Name = "billofSale";
            this.billofSale.Size = new System.Drawing.Size(342, 313);
            this.billofSale.TabIndex = 1;
            this.billofSale.TextAlign = System.Drawing.ContentAlignment.TopCenter;
            // 
            // Form2
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("$this.BackgroundImage")));
            this.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Stretch;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.pnlResposta);
            this.Name = "Form2";
            this.Text = "Form2";
            this.Load += new System.EventHandler(this.Form2_Load);
            this.pnlResposta.ResumeLayout(false);
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Panel pnlResposta;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label billofSale;
    }
}