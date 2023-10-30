using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Vendedores
{
    public class Conexao
    {
        public string connectionString = null;
        public MySqlConnection connection = null;
        public string sql;
        public string server = "172.16.54.174";
        public string database = "rafael";
        public string porta = "3310";
        public string username = "root";
        public string password = "";




        public void MySQLCRUD()
        {
            connectionString = $"Server={server}; DataBase={database}; UID={username}; PWD={password}; PORT={porta}";
            connection = new MySqlConnection(connectionString);
        }

        public Boolean AbrirConexao()
        {
            try
            {

                MySQLCRUD();

                if (connection.State == ConnectionState.Closed)
                {
                    connection = new MySqlConnection(connectionString);
                    connection.Open();
                    return true;
                }
                else
                {
                    return false;
                }
            }
            catch (Exception ex)
            {
                MessageBox.Show("Erro ao tentar Conectar com o Banco de Dados" + ex.Message);
                return false;
            }
        }

        public void FecharConexao()
        {
            try
            {
                if (connection.State == ConnectionState.Open)
                {
                    connection = new MySqlConnection(connectionString);
                    connection.Close();
                }
            }

            catch (Exception ex)
            {
                throw ex;
            }
        }
        public DataTable GetData(string query)
        {
            try
            {
                AbrirConexao();
                MySqlCommand cmd = new MySqlCommand(query, connection);
                MySqlDataAdapter adapter = new MySqlDataAdapter(cmd);
                DataTable dt = new DataTable();
                adapter.Fill(dt);
                return dt;

            }
            catch (Exception ex)
            {
                MessageBox.Show("Erro:  " + ex.Message);
                return null;
            }

            finally
            {
                FecharConexao();
            }
        }
        public Boolean GetData1(string query)
        {
            try
            {
                AbrirConexao();
                MySqlCommand cmd = new MySqlCommand(query, connection);
                MySqlDataAdapter adapter = new MySqlDataAdapter(cmd);
                return true;

            }
            catch (Exception ex)
            {
                MessageBox.Show("Erro:  " + ex.Message);
                return false;
            }

            finally
            {
                FecharConexao();
            }
        }

        public Boolean ExecuteQuery(string query)
        {
            try
            {
                AbrirConexao();
                MySqlCommand cmd = new MySqlCommand(query, connection);
                cmd.ExecuteNonQuery();
                return true;
            }
            catch (Exception ex)
            {
                MessageBox.Show("Erro:  " + ex.Message);
                return false;
            }

            finally
            {
                FecharConexao();
            }
        }

        public bool InserirConexao(string Nome, string Telefone, string Email)
        {
            try
            {
                AbrirConexao();
                MySqlCommand cmd = connection.CreateCommand();
                cmd.CommandText = "INSERT INTO sistema_vendedores(Nome_Vendedor,Telefone,Email) VALUES(@Nome_Vendedor, @Telefone, @Email)";
                cmd.Parameters.AddWithValue("@Nome_Vendedor", Nome);
                cmd.Parameters.AddWithValue("@Telefone", Telefone);
                cmd.Parameters.AddWithValue("@Email", Email);
                cmd.ExecuteNonQuery();
                return true;
            }
            catch (Exception ex)
            {
                MessageBox.Show("Erro: " + ex.Message);
                return false;
            }
            finally
            {
                FecharConexao();
            }
        }

        public bool Atualizar(string Nome, string Telefone, string Email, int ID)
        {
            try
            {
                AbrirConexao();
                MySqlCommand cmd = connection.CreateCommand();
                cmd.CommandText = "UPDATE sistema_vendedores SET Nome_Vendedor = @Nome_Vendedor, Telefone = @Telefone, Email = @Email WHERE ID = @ID";
                cmd.Parameters.AddWithValue("@Nome_Vendedor", Nome);
                cmd.Parameters.AddWithValue("@Telefone", Telefone);
                cmd.Parameters.AddWithValue("@Email", Email);
                cmd.Parameters.AddWithValue("@ID", ID);
                cmd.ExecuteNonQuery();
                return true;
            }
            catch (Exception ex)
            {
                MessageBox.Show("Erro: " + ex.Message);
                return false;
            }
            finally
            {
                FecharConexao();
            }
        }

    }
}
