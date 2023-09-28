namespace DataDesktop
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
            this.panel2 = new System.Windows.Forms.Panel();
            this.button6 = new System.Windows.Forms.Button();
            this.button5 = new System.Windows.Forms.Button();
            this.button4 = new System.Windows.Forms.Button();
            this.button3 = new System.Windows.Forms.Button();
            this.label3 = new System.Windows.Forms.Label();
            this.lblHoraAtual = new System.Windows.Forms.Label();
            this.lblDataAtual = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.lblComparar = new System.Windows.Forms.Label();
            this.lblAdicionar = new System.Windows.Forms.Label();
            this.Comparar = new System.Windows.Forms.Button();
            this.Adicionar = new System.Windows.Forms.Button();
            this.txtAdicionar = new System.Windows.Forms.TextBox();
            this.Data2 = new System.Windows.Forms.DateTimePicker();
            this.Data1 = new System.Windows.Forms.DateTimePicker();
            this.panel1.SuspendLayout();
            this.panel2.SuspendLayout();
            this.SuspendLayout();
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.Color.SkyBlue;
            this.panel1.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("panel1.BackgroundImage")));
            this.panel1.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Stretch;
            this.panel1.Controls.Add(this.panel2);
            this.panel1.Controls.Add(this.label3);
            this.panel1.Controls.Add(this.lblHoraAtual);
            this.panel1.Controls.Add(this.lblDataAtual);
            this.panel1.Controls.Add(this.label4);
            this.panel1.Controls.Add(this.lblComparar);
            this.panel1.Controls.Add(this.lblAdicionar);
            this.panel1.Controls.Add(this.Comparar);
            this.panel1.Controls.Add(this.Adicionar);
            this.panel1.Controls.Add(this.txtAdicionar);
            this.panel1.Controls.Add(this.Data2);
            this.panel1.Controls.Add(this.Data1);
            this.panel1.Location = new System.Drawing.Point(1, 2);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(811, 339);
            this.panel1.TabIndex = 0;
            // 
            // panel2
            // 
            this.panel2.BackColor = System.Drawing.Color.Transparent;
            this.panel2.Controls.Add(this.button6);
            this.panel2.Controls.Add(this.button5);
            this.panel2.Controls.Add(this.button4);
            this.panel2.Controls.Add(this.button3);
            this.panel2.Location = new System.Drawing.Point(423, 169);
            this.panel2.Name = "panel2";
            this.panel2.Size = new System.Drawing.Size(336, 99);
            this.panel2.TabIndex = 12;
            // 
            // button6
            // 
            this.button6.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("button6.BackgroundImage")));
            this.button6.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Zoom;
            this.button6.FlatAppearance.BorderColor = System.Drawing.Color.Black;
            this.button6.Location = new System.Drawing.Point(243, 22);
            this.button6.Name = "button6";
            this.button6.Size = new System.Drawing.Size(66, 56);
            this.button6.TabIndex = 3;
            this.button6.UseVisualStyleBackColor = true;
            // 
            // button5
            // 
            this.button5.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("button5.BackgroundImage")));
            this.button5.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Zoom;
            this.button5.FlatAppearance.BorderColor = System.Drawing.Color.Black;
            this.button5.Location = new System.Drawing.Point(171, 22);
            this.button5.Name = "button5";
            this.button5.Size = new System.Drawing.Size(66, 56);
            this.button5.TabIndex = 2;
            this.button5.UseVisualStyleBackColor = true;
            // 
            // button4
            // 
            this.button4.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("button4.BackgroundImage")));
            this.button4.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Zoom;
            this.button4.FlatAppearance.BorderColor = System.Drawing.Color.Black;
            this.button4.Location = new System.Drawing.Point(99, 22);
            this.button4.Name = "button4";
            this.button4.Size = new System.Drawing.Size(66, 56);
            this.button4.TabIndex = 1;
            this.button4.UseVisualStyleBackColor = true;
            // 
            // button3
            // 
            this.button3.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("button3.BackgroundImage")));
            this.button3.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Zoom;
            this.button3.FlatAppearance.BorderColor = System.Drawing.Color.Black;
            this.button3.Location = new System.Drawing.Point(27, 22);
            this.button3.Name = "button3";
            this.button3.Size = new System.Drawing.Size(66, 56);
            this.button3.TabIndex = 0;
            this.button3.UseVisualStyleBackColor = true;
            // 
            // label3
            // 
            this.label3.BackColor = System.Drawing.Color.Transparent;
            this.label3.Font = new System.Drawing.Font("Microsoft Sans Serif", 20.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.ForeColor = System.Drawing.SystemColors.ButtonHighlight;
            this.label3.Location = new System.Drawing.Point(0, 169);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(157, 32);
            this.label3.TabIndex = 11;
            this.label3.Text = "Data Atual: ";
            this.label3.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // lblHoraAtual
            // 
            this.lblHoraAtual.BackColor = System.Drawing.SystemColors.ControlLightLight;
            this.lblHoraAtual.BorderStyle = System.Windows.Forms.BorderStyle.Fixed3D;
            this.lblHoraAtual.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblHoraAtual.Location = new System.Drawing.Point(164, 226);
            this.lblHoraAtual.Name = "lblHoraAtual";
            this.lblHoraAtual.Size = new System.Drawing.Size(136, 32);
            this.lblHoraAtual.TabIndex = 10;
            // 
            // lblDataAtual
            // 
            this.lblDataAtual.BackColor = System.Drawing.SystemColors.ControlLightLight;
            this.lblDataAtual.BorderStyle = System.Windows.Forms.BorderStyle.Fixed3D;
            this.lblDataAtual.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblDataAtual.Location = new System.Drawing.Point(164, 169);
            this.lblDataAtual.Name = "lblDataAtual";
            this.lblDataAtual.Size = new System.Drawing.Size(136, 32);
            this.lblDataAtual.TabIndex = 9;
            // 
            // label4
            // 
            this.label4.BackColor = System.Drawing.Color.Transparent;
            this.label4.Font = new System.Drawing.Font("Microsoft Sans Serif", 20.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label4.ForeColor = System.Drawing.SystemColors.ButtonHighlight;
            this.label4.Location = new System.Drawing.Point(6, 226);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(151, 32);
            this.label4.TabIndex = 8;
            this.label4.Text = "Hora Atual: ";
            this.label4.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // lblComparar
            // 
            this.lblComparar.BackColor = System.Drawing.SystemColors.ControlLightLight;
            this.lblComparar.BorderStyle = System.Windows.Forms.BorderStyle.Fixed3D;
            this.lblComparar.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblComparar.Location = new System.Drawing.Point(423, 94);
            this.lblComparar.Name = "lblComparar";
            this.lblComparar.Size = new System.Drawing.Size(336, 32);
            this.lblComparar.TabIndex = 6;
            // 
            // lblAdicionar
            // 
            this.lblAdicionar.BackColor = System.Drawing.SystemColors.ControlLightLight;
            this.lblAdicionar.BorderStyle = System.Windows.Forms.BorderStyle.Fixed3D;
            this.lblAdicionar.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblAdicionar.Location = new System.Drawing.Point(423, 45);
            this.lblAdicionar.Name = "lblAdicionar";
            this.lblAdicionar.Size = new System.Drawing.Size(336, 32);
            this.lblAdicionar.TabIndex = 5;
            // 
            // Comparar
            // 
            this.Comparar.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.Comparar.Location = new System.Drawing.Point(286, 94);
            this.Comparar.Name = "Comparar";
            this.Comparar.Size = new System.Drawing.Size(105, 32);
            this.Comparar.TabIndex = 4;
            this.Comparar.Text = "Comparar";
            this.Comparar.UseVisualStyleBackColor = true;
            this.Comparar.Click += new System.EventHandler(this.Comparar_Click);
            // 
            // Adicionar
            // 
            this.Adicionar.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.Adicionar.Location = new System.Drawing.Point(286, 44);
            this.Adicionar.Name = "Adicionar";
            this.Adicionar.Size = new System.Drawing.Size(105, 32);
            this.Adicionar.TabIndex = 3;
            this.Adicionar.Text = "Adicionar";
            this.Adicionar.UseVisualStyleBackColor = true;
            this.Adicionar.Click += new System.EventHandler(this.Adicionar_Click);
            // 
            // txtAdicionar
            // 
            this.txtAdicionar.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtAdicionar.Location = new System.Drawing.Point(164, 45);
            this.txtAdicionar.Name = "txtAdicionar";
            this.txtAdicionar.Size = new System.Drawing.Size(100, 29);
            this.txtAdicionar.TabIndex = 2;
            this.txtAdicionar.TextAlign = System.Windows.Forms.HorizontalAlignment.Center;
            // 
            // Data2
            // 
            this.Data2.CalendarFont = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.Data2.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.Data2.Format = System.Windows.Forms.DateTimePickerFormat.Short;
            this.Data2.Location = new System.Drawing.Point(32, 97);
            this.Data2.Name = "Data2";
            this.Data2.Size = new System.Drawing.Size(125, 29);
            this.Data2.TabIndex = 1;
            // 
            // Data1
            // 
            this.Data1.CalendarFont = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.Data1.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.Data1.Format = System.Windows.Forms.DateTimePickerFormat.Short;
            this.Data1.Location = new System.Drawing.Point(32, 44);
            this.Data1.Name = "Data1";
            this.Data1.Size = new System.Drawing.Size(125, 29);
            this.Data1.TabIndex = 0;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(818, 344);
            this.Controls.Add(this.panel1);
            this.Name = "Form1";
            this.Text = "Form1";
            this.Load += new System.EventHandler(this.Form1_Load);
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            this.panel2.ResumeLayout(false);
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.DateTimePicker Data1;
        private System.Windows.Forms.DateTimePicker Data2;
        private System.Windows.Forms.Panel panel2;
        private System.Windows.Forms.Button button6;
        private System.Windows.Forms.Button button5;
        private System.Windows.Forms.Button button4;
        private System.Windows.Forms.Button button3;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label lblHoraAtual;
        private System.Windows.Forms.Label lblDataAtual;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label lblComparar;
        private System.Windows.Forms.Label lblAdicionar;
        private System.Windows.Forms.Button Comparar;
        private System.Windows.Forms.Button Adicionar;
        private System.Windows.Forms.TextBox txtAdicionar;
    }
}

