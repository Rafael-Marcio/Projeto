namespace TesteSQL
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
            this.txtAluno = new System.Windows.Forms.TextBox();
            this.label2 = new System.Windows.Forms.Label();
            this.txtCell = new System.Windows.Forms.TextBox();
            this.label3 = new System.Windows.Forms.Label();
            this.txtEmail = new System.Windows.Forms.TextBox();
            this.btnAdicionar = new System.Windows.Forms.Button();
            this.panel1 = new System.Windows.Forms.Panel();
            this.txtBusca = new System.Windows.Forms.TextBox();
            this.label4 = new System.Windows.Forms.Label();
            this.dataGridView1 = new System.Windows.Forms.DataGridView();
            this.panel2 = new System.Windows.Forms.Panel();
            this.delete = new System.Windows.Forms.Button();
            this.txtDelete = new System.Windows.Forms.TextBox();
            this.Atualizar = new System.Windows.Forms.Button();
            this.NovoAluno = new System.Windows.Forms.Button();
            this.label5 = new System.Windows.Forms.Label();
            this.lblAlunoSelecionado = new System.Windows.Forms.Label();
            this.label6 = new System.Windows.Forms.Label();
            this.txtLocalizarAluno = new System.Windows.Forms.TextBox();
            this.label7 = new System.Windows.Forms.Label();
            this.label8 = new System.Windows.Forms.Label();
            this.panel1.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).BeginInit();
            this.panel2.SuspendLayout();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.ForeColor = System.Drawing.Color.White;
            this.label1.Location = new System.Drawing.Point(13, 31);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(100, 23);
            this.label1.TabIndex = 0;
            this.label1.Text = "Aluno:";
            this.label1.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // txtAluno
            // 
            this.txtAluno.Font = new System.Drawing.Font("Microsoft Sans Serif", 15F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtAluno.Location = new System.Drawing.Point(119, 26);
            this.txtAluno.Name = "txtAluno";
            this.txtAluno.Size = new System.Drawing.Size(235, 30);
            this.txtAluno.TabIndex = 1;
            // 
            // label2
            // 
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.ForeColor = System.Drawing.Color.White;
            this.label2.Location = new System.Drawing.Point(13, 71);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(100, 30);
            this.label2.TabIndex = 2;
            this.label2.Text = "E-mail:";
            this.label2.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // txtCell
            // 
            this.txtCell.Font = new System.Drawing.Font("Microsoft Sans Serif", 15F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtCell.Location = new System.Drawing.Point(119, 116);
            this.txtCell.Name = "txtCell";
            this.txtCell.Size = new System.Drawing.Size(235, 30);
            this.txtCell.TabIndex = 3;
            // 
            // label3
            // 
            this.label3.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.ForeColor = System.Drawing.Color.White;
            this.label3.Location = new System.Drawing.Point(13, 116);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(100, 30);
            this.label3.TabIndex = 4;
            this.label3.Text = "Cell:";
            this.label3.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // txtEmail
            // 
            this.txtEmail.Font = new System.Drawing.Font("Microsoft Sans Serif", 15F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtEmail.Location = new System.Drawing.Point(119, 71);
            this.txtEmail.Name = "txtEmail";
            this.txtEmail.Size = new System.Drawing.Size(235, 30);
            this.txtEmail.TabIndex = 5;
            // 
            // btnAdicionar
            // 
            this.btnAdicionar.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnAdicionar.Location = new System.Drawing.Point(17, 167);
            this.btnAdicionar.Name = "btnAdicionar";
            this.btnAdicionar.Size = new System.Drawing.Size(337, 46);
            this.btnAdicionar.TabIndex = 6;
            this.btnAdicionar.Text = "Adicionar";
            this.btnAdicionar.UseVisualStyleBackColor = true;
            this.btnAdicionar.Click += new System.EventHandler(this.btnAdicionar_Click);
            // 
            // panel1
            // 
            this.panel1.Controls.Add(this.txtBusca);
            this.panel1.Controls.Add(this.label4);
            this.panel1.Location = new System.Drawing.Point(444, 13);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(410, 242);
            this.panel1.TabIndex = 7;
            this.panel1.Paint += new System.Windows.Forms.PaintEventHandler(this.panel1_Paint);
            // 
            // txtBusca
            // 
            this.txtBusca.Font = new System.Drawing.Font("Microsoft Sans Serif", 15F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtBusca.Location = new System.Drawing.Point(103, 116);
            this.txtBusca.Multiline = true;
            this.txtBusca.Name = "txtBusca";
            this.txtBusca.Size = new System.Drawing.Size(209, 31);
            this.txtBusca.TabIndex = 6;
            this.txtBusca.TextChanged += new System.EventHandler(this.txtBusca_TextChanged);
            // 
            // label4
            // 
            this.label4.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label4.ForeColor = System.Drawing.Color.White;
            this.label4.Location = new System.Drawing.Point(99, 39);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(213, 62);
            this.label4.TabIndex = 5;
            this.label4.Text = "Procurar Aluno:";
            this.label4.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // dataGridView1
            // 
            this.dataGridView1.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.dataGridView1.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridView1.Location = new System.Drawing.Point(29, 434);
            this.dataGridView1.Name = "dataGridView1";
            this.dataGridView1.Size = new System.Drawing.Size(807, 297);
            this.dataGridView1.TabIndex = 8;
            this.dataGridView1.CellClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGridView1_CellClick);
           // this.dataGridView1.CellContentClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGridView1_CellContentClick);
            // 
            // panel2
            // 
            this.panel2.Controls.Add(this.label1);
            this.panel2.Controls.Add(this.txtAluno);
            this.panel2.Controls.Add(this.label3);
            this.panel2.Controls.Add(this.btnAdicionar);
            this.panel2.Controls.Add(this.label2);
            this.panel2.Controls.Add(this.txtCell);
            this.panel2.Controls.Add(this.txtEmail);
            this.panel2.Location = new System.Drawing.Point(12, 13);
            this.panel2.Name = "panel2";
            this.panel2.Size = new System.Drawing.Size(389, 242);
            this.panel2.TabIndex = 9;
            // 
            // delete
            // 
            this.delete.BackColor = System.Drawing.Color.Red;
            this.delete.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.delete.Location = new System.Drawing.Point(505, 261);
            this.delete.Name = "delete";
            this.delete.Size = new System.Drawing.Size(283, 46);
            this.delete.TabIndex = 7;
            this.delete.Text = "Deletar";
            this.delete.UseVisualStyleBackColor = false;
            this.delete.Click += new System.EventHandler(this.delete_Click);
            // 
            // txtDelete
            // 
            this.txtDelete.Font = new System.Drawing.Font("Microsoft Sans Serif", 15F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtDelete.Location = new System.Drawing.Point(103, 261);
            this.txtDelete.Multiline = true;
            this.txtDelete.Name = "txtDelete";
            this.txtDelete.Size = new System.Drawing.Size(210, 46);
            this.txtDelete.TabIndex = 10;
            this.txtDelete.TextAlign = System.Windows.Forms.HorizontalAlignment.Center;
            // 
            // Atualizar
            // 
            this.Atualizar.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(255)))), ((int)(((byte)(192)))), ((int)(((byte)(128)))));
            this.Atualizar.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.Atualizar.Location = new System.Drawing.Point(505, 313);
            this.Atualizar.Name = "Atualizar";
            this.Atualizar.Size = new System.Drawing.Size(283, 46);
            this.Atualizar.TabIndex = 11;
            this.Atualizar.Text = "Atualizar Aluno";
            this.Atualizar.UseVisualStyleBackColor = false;
            this.Atualizar.Click += new System.EventHandler(this.Atualizar_Click);
            // 
            // NovoAluno
            // 
            this.NovoAluno.BackColor = System.Drawing.Color.Yellow;
            this.NovoAluno.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.NovoAluno.Location = new System.Drawing.Point(505, 365);
            this.NovoAluno.Name = "NovoAluno";
            this.NovoAluno.Size = new System.Drawing.Size(283, 46);
            this.NovoAluno.TabIndex = 12;
            this.NovoAluno.Text = "Novo Aluno";
            this.NovoAluno.UseVisualStyleBackColor = false;
            this.NovoAluno.Click += new System.EventHandler(this.NovoAluno_Click);
            // 
            // label5
            // 
            this.label5.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label5.ForeColor = System.Drawing.Color.White;
            this.label5.Location = new System.Drawing.Point(24, 365);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(210, 39);
            this.label5.TabIndex = 13;
            this.label5.Text = "Aluno Selecionado: ";
            this.label5.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // lblAlunoSelecionado
            // 
            this.lblAlunoSelecionado.BackColor = System.Drawing.Color.White;
            this.lblAlunoSelecionado.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.lblAlunoSelecionado.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.lblAlunoSelecionado.Font = new System.Drawing.Font("Microsoft Sans Serif", 21.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblAlunoSelecionado.Location = new System.Drawing.Point(242, 356);
            this.lblAlunoSelecionado.Name = "lblAlunoSelecionado";
            this.lblAlunoSelecionado.Size = new System.Drawing.Size(71, 55);
            this.lblAlunoSelecionado.TabIndex = 14;
            this.lblAlunoSelecionado.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // label6
            // 
            this.label6.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label6.ForeColor = System.Drawing.Color.White;
            this.label6.Location = new System.Drawing.Point(24, 768);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(210, 39);
            this.label6.TabIndex = 15;
            this.label6.Text = "Localizar Aluno:";
            this.label6.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // txtLocalizarAluno
            // 
            this.txtLocalizarAluno.Font = new System.Drawing.Font("Microsoft Sans Serif", 15F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtLocalizarAluno.Location = new System.Drawing.Point(240, 761);
            this.txtLocalizarAluno.Multiline = true;
            this.txtLocalizarAluno.Name = "txtLocalizarAluno";
            this.txtLocalizarAluno.Size = new System.Drawing.Size(210, 46);
            this.txtLocalizarAluno.TabIndex = 16;
            this.txtLocalizarAluno.TextAlign = System.Windows.Forms.HorizontalAlignment.Center;
            // 
            // label7
            // 
            this.label7.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label7.ForeColor = System.Drawing.Color.White;
            this.label7.Location = new System.Drawing.Point(500, 761);
            this.label7.Name = "label7";
            this.label7.Size = new System.Drawing.Size(227, 59);
            this.label7.TabIndex = 17;
            this.label7.Text = "Quantidade de Registros: ";
            this.label7.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // label8
            // 
            this.label8.BackColor = System.Drawing.Color.White;
            this.label8.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.label8.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.label8.Font = new System.Drawing.Font("Microsoft Sans Serif", 21.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label8.Location = new System.Drawing.Point(733, 761);
            this.label8.Name = "label8";
            this.label8.Size = new System.Drawing.Size(71, 59);
            this.label8.TabIndex = 18;
            this.label8.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.Black;
            this.ClientSize = new System.Drawing.Size(866, 846);
            this.Controls.Add(this.label8);
            this.Controls.Add(this.label7);
            this.Controls.Add(this.txtLocalizarAluno);
            this.Controls.Add(this.label6);
            this.Controls.Add(this.lblAlunoSelecionado);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.NovoAluno);
            this.Controls.Add(this.Atualizar);
            this.Controls.Add(this.txtDelete);
            this.Controls.Add(this.delete);
            this.Controls.Add(this.panel2);
            this.Controls.Add(this.dataGridView1);
            this.Controls.Add(this.panel1);
            this.Name = "Form1";
            this.Text = "Form1";
            this.Load += new System.EventHandler(this.Form1_Load);
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).EndInit();
            this.panel2.ResumeLayout(false);
            this.panel2.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox txtAluno;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.TextBox txtCell;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.TextBox txtEmail;
        private System.Windows.Forms.Button btnAdicionar;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.TextBox txtBusca;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.DataGridView dataGridView1;
        private System.Windows.Forms.Panel panel2;
        private System.Windows.Forms.Button delete;
        private System.Windows.Forms.TextBox txtDelete;
        private System.Windows.Forms.Button Atualizar;
        private System.Windows.Forms.Button NovoAluno;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.Label lblAlunoSelecionado;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.TextBox txtLocalizarAluno;
        private System.Windows.Forms.Label label7;
        private System.Windows.Forms.Label label8;
    }
}

