using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using static System.Windows.Forms.VisualStyles.VisualStyleElement;

namespace Calculater
{
    public partial class Form1 : Form
    {
        int a = 0;
        int b, c;
        string msg;
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + button1.Text;
        }

        private void button2_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + button2.Text;
        }

        private void button3_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + button3.Text;
        }

        private void button4_Click(object sender, EventArgs e)
        {
            a = Convert.ToInt32(textBox1.Text);
            textBox1.Text = "";
            msg = "+";
        }

        private void button6_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + button6.Text;
        }

        private void button7_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + button7.Text;
        }

        private void button8_Click(object sender, EventArgs e)
        {
            a = Convert.ToInt32(textBox1.Text);
            textBox1.Text = "";
            msg = "-";
        }

        private void button9_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + button9.Text;
        }

        private void button10_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + button10.Text;
        }

        private void button11_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + button11.Text;
        }

        private void button12_Click(object sender, EventArgs e)
        {
            a = Convert.ToInt32(textBox1.Text);
            textBox1.Text = "";
            msg = "*";
        }

        private void button13_Click(object sender, EventArgs e)
        {
            textBox1.Text = "";
        }

        private void button14_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + button14.Text;
        }

        private void button15_Click(object sender, EventArgs e)
        {
            if (msg == "+")
            {
                b = Convert.ToInt32(textBox1.Text);
                c = a + b;
            }

            if (msg == "-")
            {
                b = Convert.ToInt32(textBox1.Text);
                c = a - b;
            }

            if (msg == "*")
            {
                b = Convert.ToInt32(textBox1.Text);
                c = a * b;
            }

            if (msg == "/")
            {
                b = Convert.ToInt32(textBox1.Text);
                c = a / b;
            }

            textBox1.Text = c.ToString();
        }

        private void button16_Click(object sender, EventArgs e)
        {
            a = Convert.ToInt32(textBox1.Text);
            textBox1.Text = "";
            msg = "/";
        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void button5_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + button5.Text;
        }
    }
}
