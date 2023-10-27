namespace TesteTrocaBTN
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
            this.button1 = new System.Windows.Forms.Button();
            this.txtDesc = new System.Windows.Forms.TextBox();
            this.txtFab = new System.Windows.Forms.TextBox();
            this.txtValor = new System.Windows.Forms.TextBox();
            this.txtQntd = new System.Windows.Forms.TextBox();
            this.btnEditar = new System.Windows.Forms.Button();
            this.btnDeletar = new System.Windows.Forms.Button();
            this.dataGrid = new System.Windows.Forms.DataGridView();
            this.label1 = new System.Windows.Forms.Label();
            this.lblProdutoSelecionado = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            ((System.ComponentModel.ISupportInitialize)(this.dataGrid)).BeginInit();
            this.SuspendLayout();
            // 
            // button1
            // 
            this.button1.Font = new System.Drawing.Font("Microsoft Sans Serif", 16.25F);
            this.button1.Location = new System.Drawing.Point(447, 61);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(124, 43);
            this.button1.TabIndex = 0;
            this.button1.Text = "Adicionar";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // txtDesc
            // 
            this.txtDesc.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtDesc.Location = new System.Drawing.Point(146, 61);
            this.txtDesc.Name = "txtDesc";
            this.txtDesc.Size = new System.Drawing.Size(179, 29);
            this.txtDesc.TabIndex = 1;
            // 
            // txtFab
            // 
            this.txtFab.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F);
            this.txtFab.Location = new System.Drawing.Point(146, 96);
            this.txtFab.Name = "txtFab";
            this.txtFab.Size = new System.Drawing.Size(179, 29);
            this.txtFab.TabIndex = 2;
            // 
            // txtValor
            // 
            this.txtValor.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F);
            this.txtValor.Location = new System.Drawing.Point(146, 133);
            this.txtValor.Name = "txtValor";
            this.txtValor.Size = new System.Drawing.Size(179, 29);
            this.txtValor.TabIndex = 3;
            // 
            // txtQntd
            // 
            this.txtQntd.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F);
            this.txtQntd.Location = new System.Drawing.Point(146, 174);
            this.txtQntd.Name = "txtQntd";
            this.txtQntd.Size = new System.Drawing.Size(179, 29);
            this.txtQntd.TabIndex = 4;
            // 
            // btnEditar
            // 
            this.btnEditar.Font = new System.Drawing.Font("Microsoft Sans Serif", 16.25F);
            this.btnEditar.Location = new System.Drawing.Point(447, 117);
            this.btnEditar.Name = "btnEditar";
            this.btnEditar.Size = new System.Drawing.Size(124, 43);
            this.btnEditar.TabIndex = 5;
            this.btnEditar.Text = "Editar";
            this.btnEditar.UseVisualStyleBackColor = true;
            this.btnEditar.Click += new System.EventHandler(this.btnEditar_Click);
            // 
            // btnDeletar
            // 
            this.btnDeletar.Font = new System.Drawing.Font("Microsoft Sans Serif", 16.25F);
            this.btnDeletar.Location = new System.Drawing.Point(447, 176);
            this.btnDeletar.Name = "btnDeletar";
            this.btnDeletar.Size = new System.Drawing.Size(124, 43);
            this.btnDeletar.TabIndex = 6;
            this.btnDeletar.Text = "Deletar";
            this.btnDeletar.UseVisualStyleBackColor = true;
            this.btnDeletar.Click += new System.EventHandler(this.btnDeletar_Click);
            // 
            // dataGrid
            // 
            this.dataGrid.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGrid.Location = new System.Drawing.Point(25, 264);
            this.dataGrid.Name = "dataGrid";
            this.dataGrid.Size = new System.Drawing.Size(546, 174);
            this.dataGrid.TabIndex = 7;
            this.dataGrid.CellContentClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGrid_CellContentClick);
            // 
            // label1
            // 
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(21, 220);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(204, 23);
            this.label1.TabIndex = 8;
            this.label1.Text = "Produto Selecionado:";
            this.label1.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // lblProdutoSelecionado
            // 
            this.lblProdutoSelecionado.BackColor = System.Drawing.Color.White;
            this.lblProdutoSelecionado.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.lblProdutoSelecionado.Location = new System.Drawing.Point(276, 213);
            this.lblProdutoSelecionado.Name = "lblProdutoSelecionado";
            this.lblProdutoSelecionado.Size = new System.Drawing.Size(49, 41);
            this.lblProdutoSelecionado.TabIndex = 9;
            this.lblProdutoSelecionado.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // label2
            // 
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.Location = new System.Drawing.Point(21, 61);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(119, 23);
            this.label2.TabIndex = 10;
            this.label2.Text = "Descriçao:";
            this.label2.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // label3
            // 
            this.label3.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.Location = new System.Drawing.Point(21, 96);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(119, 23);
            this.label3.TabIndex = 11;
            this.label3.Text = "Fabricante: ";
            this.label3.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // label4
            // 
            this.label4.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label4.Location = new System.Drawing.Point(21, 137);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(119, 23);
            this.label4.TabIndex = 12;
            this.label4.Text = "Valor: ";
            this.label4.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // label5
            // 
            this.label5.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label5.Location = new System.Drawing.Point(21, 176);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(119, 23);
            this.label5.TabIndex = 13;
            this.label5.Text = "Qtd: ";
            this.label5.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(620, 456);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.lblProdutoSelecionado);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.dataGrid);
            this.Controls.Add(this.btnDeletar);
            this.Controls.Add(this.btnEditar);
            this.Controls.Add(this.txtQntd);
            this.Controls.Add(this.txtValor);
            this.Controls.Add(this.txtFab);
            this.Controls.Add(this.txtDesc);
            this.Controls.Add(this.button1);
            this.Name = "Form1";
            this.Text = "Form1";
            this.Load += new System.EventHandler(this.Form1_Load);
            ((System.ComponentModel.ISupportInitialize)(this.dataGrid)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.TextBox txtDesc;
        private System.Windows.Forms.TextBox txtFab;
        private System.Windows.Forms.TextBox txtValor;
        private System.Windows.Forms.TextBox txtQntd;
        private System.Windows.Forms.Button btnEditar;
        private System.Windows.Forms.Button btnDeletar;
        private System.Windows.Forms.DataGridView dataGrid;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label lblProdutoSelecionado;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label5;
    }
}

