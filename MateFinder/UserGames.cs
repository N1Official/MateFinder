using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MateFinder
{
    internal class UserGames
    {
        private int _user_id;
        private int _game_id;
        private int _goal_id;
        private int _rank_id;
        private int _level;
        public int user_id { get => _user_id; set => _user_id = value; }
        public int game_id { get => _game_id; set => _game_id = value; }
        public int goal_id { get => _goal_id; set => _goal_id = value; }
        public int rank_id { get => _rank_id; set => _rank_id = value; }
        public int level { get => _level; set => _level = value; }
    }
}
