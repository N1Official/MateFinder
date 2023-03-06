using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MateFinder
{
    class Game
    {
        private int _id;
        private string _name;
        private string[] _category;
        private string[] _ranks;
        private string _current_rank;
        private int _level;
        private string _goal;

        public int id { get => _id; set => _id = value; }
        public string name { get => _name; set => _name = value; }
        public string[] category { get => _category; set => _category = value; }
        public string[] ranks { get => _ranks; set => _ranks = value; }
        public string current_rank { get => _current_rank; set => _current_rank = value; }
        public int level { get => _level; set => _level = value; }
        public string goal { get => _goal; set => _goal = value; }
    }
}
